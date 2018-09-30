<?php
session_start();

require("layout.php");

// **DISPLAY PAGE**
echo $header;

// Assignments
if(isset($_GET['assignments'])) {
	
    // Display Assignment Links
    
    echo "<h2>Coming Soon!<br /></h2>";
	
}

// View home page
else {
	// Display site links
	
	echo "<h2>Follow along as I figure out how the internet works</h2>";
}

echo $footer;

?>