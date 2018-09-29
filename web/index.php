<?php
session_start();

require("layout.php");

// View all products
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