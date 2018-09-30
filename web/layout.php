<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>CS313 on AllieGlaser.com</title>
	<link rel='stylesheet' type='text/css' href='./home-style.css' />
</head>
<body>
	<div class="container" ><a href='./index.php'><h1>CS 313</h1></a></div>
		
        <header>
            <p><a href='./index.php'>Home</a></p>
            <br>
            <a href='./index.php?assignments=1' class="assignments">Assignments</a>
        </header>
        
		<div class='content'>
HTML;

$footer = <<<HTML
		
        
        </div><!-- End content-->
	</div><!-- End container-->
</body>
</html>
HTML;

?>