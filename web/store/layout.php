<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>SnoGourmet</title>
	<link rel='stylesheet' type='text/css' href='./style.css' />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
<body>
	<div class="container" >
    <header>    
            <nav>
                <div class='left'>
                    <a href='./index.php'><img src='./images/snocone_icon.svg' alt='SnoCone Icon Home Link' class='home_icon'></a>
                </div>
                <div class='center'><a href='./index.php'><h1>SnoGourmet</h1></a></div>
                <div class='right'>
                    <a href='./index.php?view_cart=1' class="view_cart"><img src='./images/cart_icon.svg' alt='Cart Icon Link' class='cart_icon'><br><span>View Cart</span></a>
                </div>    
            </nav>
		</header>
    </div>
    <div class='content'>
HTML;

$footer = <<<HTML
        
        </div><!-- End content-->
	</div><!-- End container-->
</body>
</html>
HTML;

?>
