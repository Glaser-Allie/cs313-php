<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>Sno Gourmet</title>
	<link rel='stylesheet' type='text/css' href='./style.css' />
</head>
<body>
	<div class="container" ><a href='./index.php'><h1>Sno Gourmet</h1></a></div>
		
        <header>
    
            <nav>
    
                <div class='left'>
                    <a href='./index.php'><img src='./images/snocone_icon.svg' alt='SnoCone Icon Home Link' class='home_icon'></a>
                </div>
    
                <div class='right'>
                    <a href='./index.php?view_cart=1' class="view_cart"><img src='./images/cart_icon.svg' alt='Cart Icon Link' class='cart_icon'><br>View Cart</a>
                </div>    
            </nav>
    
            <div class='crumbs'></div>
    
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
