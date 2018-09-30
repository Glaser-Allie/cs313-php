<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>CS313 on AllieGlaser.com</title>
	<link rel='stylesheet' type='text/css' href='./home-style.css' />
</head>
<body>
	<div class="container" >
        <a href='./index.php'>
            <h1>CS 313</h1>
        </a>
    </div>
		
    <header>
        <div><a href='./index.php' class="assignments">Home</a></div>
        <div><a href='./index.php?assignments=1' class="assignments">Assignments</a></div>
    </header>
        
		<div class='content'>
HTML;

$footer = <<<HTML
<!doctype HTML public>
		<div>This is the Footer</div>
        
        </div><!-- End content-->
	</div><!-- End container-->
</body>
</html>
HTML;

?>