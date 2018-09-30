<?php
session_start();

require("layout.php");

// **DISPLAY PAGE**
echo $header;

// Checkout
if(isset($_GET['assignments'])) {
	// Display site links
    
    echo "<p>Coming Soon!<br /></p>";
	
}

// View home page
else {
	// Display site links
	echo "<a href='./index.php' class='breadcrumb'>Home</a>";
	
	echo "<h2>Follow along as I figure out how the internet works</h2>";

	// Loop to display all products
}

echo $footer;

?>