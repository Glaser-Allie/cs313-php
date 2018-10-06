<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>Sno Gourment</title>
	<link rel='stylesheet' type='text/css' href='./style.css' />
</head>
<body>
	<div class="container" ><a href='./index.php'><h1>Sno Gourmet</h1></a></div>
		
        <header>
    
            <nav>
    
                <div class='left'>
                    <a href='./index.php' class='breadcrumb'><img src='./images/snocone_icon.svg' alt='SnoCone Icon Home Link' class='home_icon'>SnoHome</a>
                </div>
    
                <div class='right'>
                    <a href='./index.php?view_cart=1' class="view_cart"><img src='./images/cart_icon.svg' alt='Cart Icon Link' class='cart_icon'>View Cart</a>
                    <a href='./index.php?empty_cart=1' class="empty_cart">Empty Cart</a>
                </div>
    
            </nav>
    
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
