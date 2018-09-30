<?php

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>CS313 on AllieGlaser.com</title>
	<link rel='stylesheet' type='text/css' href='./home-style.css' />
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
    
    <div class="container" >
            <h1>Allie Attempts CS 313</h1>
            <h2>follow along as she figures out the internet</h2>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <defs>
	  <symbol id="arrow" viewBox="0 0 100 100">
	  	<path d="M12.5 45.83h64.58v8.33H12.5z"/>
    		<path d="M59.17 77.92l-5.84-5.84L75.43 50l-22.1-22.08 5.84-5.84L87.07 50z"/>
	  </symbol>
  </defs>
</svg>

<div class="homebox">
	
	<div class="innerbox">
		
		<a href="#" class="button">
			Button Text
			<span>
				<svg>
					<use xlink:href="#arrow" href="#arrow"></use>
				</svg>
			</span>
		</a>
		
	</div>
	
</div>
    </div>
        
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