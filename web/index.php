<?php
session_start();

require("layout.php");

// **DISPLAY PAGE**
echo $header;

// Assignments
if(isset($_GET['assignments'])) {
	
    // Display Assignment Links
    
    echo "<h2>Assignments Coming Soon!<br /></h2>";
	
}

// View home page
else {
	// Display site links
	 
    echo "<div><a href='./index.php?assignments=1' class='assignments'><h3>Assignments</h3></a></div>";
}

echo $footer;

?>