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
			<a href='./index.php'>Home</a> &gt; <a href='./index.php'>" . $products[$product_id]['type'] . "</a></div>";
        
        echo $message;
		
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
					<input type='hidden' name='product_id' value='$product_id' />
					<div class='button-margin'><button type='submit' name='add_to_cart' class='pink'>Add to cart</button></div>
				</form>
			</div>
            </div>
		</div>";
	}
	else {
		echo "Invalid product!";
	}
}

// View all products
//else {
	
	echo "<h2>Icy Cool Treats!</h2>";

	// Loop to display all products
	foreach($products as $id => $product) {
		echo "<div class='item_display'>
                    <div><a href='./index.php?view_product=$id'>" . $product['image'] . "</div><div><h4>" . $product['name'] . "</h4></div></a>
                    <div class='item_price'>$" . $product['price'] . "</div>
		      </div>";
	}
//}

echo $footer;

?>