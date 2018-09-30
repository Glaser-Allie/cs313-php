<?php
session_start();

require("layout.php");

// Assignments
if(isset($_GET['assignments'])) {
	
    // Display Assignment Links
    
    echo "<p>Coming Soon!<br /></p>";
	
}

// View home page
else {
	// Display site links
	
	echo "<h2>Follow along as I figure out how the internet works</h2>";
}

echo $footer;

?>