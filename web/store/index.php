<?php
session_start();
require("products.php");
require("layout.php");

// Initialize cart
if(!isset($_SESSION['shopping_cart'])) {
	$_SESSION['shopping_cart'] = array();
}
// Empty cart
if(isset($_GET['empty_cart'])) {
	$_SESSION['shopping_cart'] = array();
}


// **PROCESS FORM DATA**

$message = '';

// Add product to cart
if(isset($_POST['add_to_cart'])) {
	$product_id = $_POST['product_id'];
	
	// Check for valid item
	if(!isset($products[$product_id])) {
		$message = "<h5>Invalid item!</h5><br />";
	}
	// If item is already in cart, tell user
	else if(isset($_SESSION['shopping_cart'][$product_id])) {
		$message = "<h5>Item already in cart!</h5><br />";
	}
	// Otherwise, add to cart
	else {
		$_SESSION['shopping_cart'][$product_id]['product_id'] = $_POST['product_id'];
		$_SESSION['shopping_cart'][$product_id]['quantity'] = $_POST['quantity'];
		$message = "<h5>Added to cart!</h5>";
	}
}

// Update Cart
if(isset($_POST['update_cart'])) {
	$quantities = $_POST['quantity'];
	foreach($quantities as $id => $quantity) {
		if(!isset($products[$id])) {
			$message = "<h5>Invalid product!</h5>";
			break;
		}
		$_SESSION['shopping_cart'][$id]['quantity'] = $quantity;
        $quantity = trim($quantity);
        if(is_numeric($quantity)){
		$message = "<h5>Cart updated!</h5><br />";
        }
        else {
        $message = "<h5>Value is not a vaild #!</h5><br />";
        }
	}
}

// **DISPLAY PAGE**
echo $header;

// View a product
if(isset($_GET['view_product'])) {
	$product_id = $_GET['view_product'];
	
	if(isset($products[$product_id])) {
		// Display breadcrumbs
		echo "<div class='crumbs'>
			<div class='phone_crumbs'><a href='./index.php'>Home</a> &nbsp;&gt;&nbsp;  <a href='./index.php'>" . $products[$product_id]['type'] . "</a> </div>
            <a href='./index.php?view_cart=1' class='phone_cart_home'><img src='./images/cart_icon.svg' alt='Cart Icon Link' class='cart_icon'></a></div>";
        
		
		// Display product
		echo "<div class='product_page'>
            <div class='product_img'>" . $products[$product_id]['image'] . "</div><br />
			<div class='product_specs'>
                <h3>" . $products[$product_id]['name'] . "</h3>
        
                <div class='item_description'>" . $products[$product_id]['description'] . "</div>
                
                <div class='product_price'><h4>$" . $products[$product_id]['price'] . "</h4></div>
                
			<div class='how_many'>
				<form action='./index.php?view_product=$product_id' method='post'>
                    <h3>How Many?</h3> 
					<select name='quantity'>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
					</select></div>
					<input type='hidden' name='product_id' value='$product_id' /><br>";
        echo $message;
        
		echo "<button type='submit' name='add_to_cart' class='pink'>Add to cart</button></div>
				</form>
			</div>
            </div>
		</div>";
	}
	else {
		echo "Invalid product!";
	}
}
// View cart
else if(isset($_GET['view_cart'])) {
    
    // Display breadcrumbs
		echo "<div class='crumbs'>
			<div class='phone_crumbs'>
        <a href='./index.php?empty_cart=1' class='empty_cart'>Empty Cart</a></div>
            <a href='./index.php?view_cart=1' class='phone_cart_home'><img src='./images/cart_icon.svg' alt='Cart Icon Link' class='cart_icon'></a></div>";
    
    echo $message;

        echo"<h2 class='cart'>Your Cart</h2>";
	
	if(empty($_SESSION['shopping_cart'])) {
		echo "<h5>Your cart is empty.<h5><br />";
	}
	else {
		echo "<div class='cart_page'>
                <form action='./index.php?view_cart=1' method='post' class='cart_form'>
				<ul class='cart_header'>
                    <li class='flavor'>Flavor</li>
					<li class='price'>Price</li>
					<li class='quantity'>Quantity</li>
				</ul>";
				foreach($_SESSION['shopping_cart'] as $id => $product) {
					$product_id = $product['product_id'];
					
					echo "<ul>
						<li class='flavor'><a href='./index.php?view_product=$id'>" . 
							$products[$product_id]['name'] . "</a></li>
						<li class='price'>" . $products[$product_id]['price'] . "</li>
						<li class='quantity'>
							<input type='text' maxlength='5' class='quantity_input' name='quantity[$product_id]' value='" . $product['quantity'] . "' />
                            <button type='submit' name='update_cart' value='Update'>Update</button></li>
					</ul>";
				}
			echo "</ul>
			
			</form>
            
			<div class='checkout'>
				<a href='./index.php?checkout=1'>Checkout</a>
			</div>
            </div>";
    }
}

// Checkout
else if(isset($_GET['checkout'])) {
	// Display breadcrumbs
	echo "<a href='./index.php?view_cart=1' class='crumbs'>Back to Cart</a>";
	
	if(empty($_SESSION['shopping_cart'])) {
		echo "Your cart is empty.<br />";
	}
	else {
		echo "<div class='checkout_page'><h2>Checkout</h2>
        <form action='./index.php?checkout=1' method='post' class='cart_form'>
		<ul class='cart_header'>
                    <li class='flavor'>Flavor</li>
					<li class='price'>Price</li>
					<li class='quantity'>Qty</li>
                    <li class='calc_price'>Total</li>
				</ul><br>";
				
				$total_price = 0;
				foreach($_SESSION['shopping_cart'] as $id => $product) {
					$product_id = $product['product_id'];
					
					
					$total_price += $products[$product_id]['price'] * $product['quantity'];
					echo "           
                    <ul>
                    <li class='flavor'><a href='./index.php?view_product=$id'>" . 
							$products[$product_id]['name'] . "</a></li>
                            <li class='price' >$" . $products[$product_id]['price'] . "</li> 
						<li class='quantity'>" . $product['quantity'] . "</li>
						<li class='calc_price'>$" . number_format(($products[$product_id]['price'] * $product['quantity']),2) . "</li>
                        </ul><br>";
                }
            echo "</form><ul class='total'>
                    <li >Total price:&nbsp;</li>
                    <li>$" . number_format($total_price,2) . "<li>
                </ul>";       
           
            
            echo "<form action='./index.php?purchase_complete=1' method='post'>   
            
            <div class='checkout_info'>
            <h4>Please enter your shipping information:</h4>
			<label>&nbsp;</label>
            <input type='text' placeholder='Name' name='name'>
			<br/>
            
			<label>&nbsp;</label>
            <input type='text' placeholder='Email Address' name='email'>
			<br/>
           
			<label>&nbsp;</label>
            <input type='text' placeholder='Street Address' name='address'>
			<br/>
           
            <label>&nbsp;</label>
            <div class='citystatezip'>
            <input type='text' placeholder='City' name='city'> 
            <input type='text' placeholder='State' name='state' maxlength='25'>
            <input type='text' placeholder='Zip' name='zip' maxlength='5'>
            </div>
            </div>
            
            <button type='submit' name='purchase_complete' class='pink'>Complete Purchase</button></form></div>   
            ";
        }
	}

// Purchase Complete
else if(isset($_GET['purchase_complete'])) {
    
    // Display breadcrumbs
	echo "<a href='./index.php?view_cart=1' class='crumbs'>Back to Cart</a>";
    
    echo "<h2>Purchase Complete</h2>";
    
    echo "<div class='receipt'>
            <h5>Thank you for your purchase, " . $_POST ["name"]."!</h5>
            <div class='confirm'>If we need to contact you, we'll email: <br>" . $_POST ["email"] . "</div>
            
            <div class='confirm'>And, we'll deliver your SnoGourmet order to: <br>" . $_POST ["address"] . ", " . $_POST ["city"] . ",  " . $_POST ["state"] . "  " . $_POST ["zip"] . "</div>";
    
    echo "<form action='./index.php?checkout=1' method='post'>";
				
				$total_price = 0;
				foreach($_SESSION['shopping_cart'] as $id => $product) {
					$product_id = $product['product_id'];
					
					
					$total_price += $products[$product_id]['price'] * $product['quantity'];
					echo "<div>           
                    <ul class='summary'>
                        <li>" . $products[$product_id]['image'] . "</li>
                        <li>
                            <a href='./index.php?view_product=$id'>" . $product['quantity'] . " " . $products[$product_id]['name'] . "<br> &#64; $" . $products[$product_id]['price'] . "</a>
                        </li>
                        <li> $" .  number_format(($products[$product_id]['price'] * $product['quantity']),2) ."</li>
                    </ul>
                </form>";
                }
    
            echo "<ul class='final_total'>
                    <li >Total price: $" . number_format($total_price,2) . "<li>
                </ul></div>";  
}

// View all products
else {
    
    //Display Cart in breadcrumbs
    echo "<div class='crumbs'>
            <a href='./index.php?view_cart=1' class='phone_cart_home'><img src='./images/cart_icon.svg' alt='Cart Icon Link' class='cart_icon'></a></div>";
	
	echo "<h2>Icy Cool Treats!</h2>";

	// Loop to display all products
	foreach($products as $id => $product) {
		echo "<div class='item_display'>
                    <div><a href='./index.php?view_product=$id'>" . $product['image'] . "</div><div><h4>" . $product['name'] . "</h4></div></a>
                    <div class='item_price'>$" . $product['price'] . "</div>
		      </div>";
	}
}

echo $footer;

?>