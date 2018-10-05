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
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!--Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="./maifest.json">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href='./index.php'>Home</a></li>
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
