<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>CS313 on AllieGlaser.com</title>
	<link rel='stylesheet' type='text/css' href='./home-style.css' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <!--iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!--Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="./maifest.json">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href='http://cs313.allieglaser.com/'>Home</a></li>
                <li><a href='./index.php?assignments=1'>Assignments</a></li>
            </ul>
        </nav>
    </header>
    
    <div class='content'>
HTML;

$footer = <<<HTML
<!doctype HTML public>
		<div></div>
        
        </div><!-- End content-->
	</div><!-- End container-->
</body>
</html>
HTML;

?>