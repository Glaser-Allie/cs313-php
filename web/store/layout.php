<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>SnoGourmet</title>
	<link rel='stylesheet' type='text/css' href='./style.css' />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="icon" type="image/png" href="./favicon_16x16.png" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<div class="container" >
    <a href="./../index.php?assignments=1"><div class='go_back'><i class="fas fa-chevron-left"></i><p>&nbsp;Assignments</p></div></a>
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
