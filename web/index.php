<?php
session_start();

require("layout.php");

// **DISPLAY PAGE**
echo $header;

echo $message;

// Checkout
if(isset($_GET['checkout'])) {
	// Display site links
	echo "<a href='./index.php' class='breadcrumb'>Shoppe Home</a>";
	
	echo "<h2>Checkout</h2>";
	
	if(empty($_SESSION['shopping_cart'])) {
		echo "Your cart is empty.<br />";
	}
	else {
		echo "<form action='./index.php?checkout=1' method='post'>
		<ul class='cart_header'>
                    <li class='name'>Name</li>
					<li class='price'>Price</li>
					<li class='quantity'>Qty</li>
				</ul>";
				
				$total_price = 0;
				foreach($_SESSION['shopping_cart'] as $id => $product) {
					$product_id = $product['product_id'];
					
					
					$total_price += $products[$product_id]['price'] * $product['quantity'];
					echo "           
                    <ul>
                    <li class='name'><a href='./index.php?view_product=$id'>" . 
							$products[$product_id]['name'] . "</a></li>
                            <li class='price' >$" . $products[$product_id]['price'] . "</li> 
						<li class='quantity'>" . $product['quantity'] . "</li>
						<li class='calc_price'>$" . number_format(($products[$product_id]['price'] * $product['quantity']),2) . "</li>
                        </ul>
                        <ul>
			             <li class='total'>Total price:</li><li class='final_total'>$" . number_format($total_price,2) . "<li>
                        </ul>
                        ]";
                    
                    echo "<form action='./index.php?purchase_complete' method='post'>        
            
            <div class='checkout_info'>
            <p>Please enter your shipping information:</p>

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
            <input type='text' placeholder='City' name='city'>\n\n 
            <input type='text' placeholder='State' name='state' maxlength='2'>\n\n\n\n
            <input type='text' placeholder='Zip' name='zip' maxlength='5'>
            </div>
            
			<br />
            <input type='hidden'></input>
            <a href='./index.php?purchase_complete'><input type='submit' value='Complete Purchase'></a>
            </div>";
            
                }
	}
}

// View home page
else {
	// Display site links
	echo "<a href='./index.php' class='breadcrumb'>Shoppe Home</a>";
	
	echo "<h2>Hoenn Region Pok&eacute;mon</h2>";

	// Loop to display all products
	foreach($products as $id => $product) {
		echo "<div class='pokecard'>
			<div><h4><a href='./index.php?view_product=$id'>" . $product['name'] . "</h4></div>
            <div>" . $product['image'] . "</div></a>
			<div class='card_description'>" . $product['type'] . "\n\n|\n\n" . $product['wave'] . "\n Wave</div>
            <div>$" . $product['price'] . "</div>            
		</div>";
	}
}

echo $footer;

?>