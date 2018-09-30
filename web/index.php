<?php
session_start();

require("layout.php");


// **DISPLAY PAGE**
echo $header;

echo $message;

	echo "<a href='./index.php' class='breadcrumb'>Shoppe Home</a>";
	
	echo "<h2>Hoenn Region Pok&eacute;mon</h2>";

echo $footer;

?>