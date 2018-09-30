<?php
session_start();

require("layout.php");

// **DISPLAY PAGE**
echo $header;

// Assignments
if(isset($_GET['assignments'])) {
	
    // Display Assignment Links
    
    echo "<h2 class='assignments'>Assignments Coming Soon!<br /></h2>";
    "<div class='container'>
            <div class='landing-message'>
                <h2 class='assignments'>Assignments Coming Soon!<br /></h2>
            </div>
	
}

// View home page
else {
	// Display site links
	 
    echo "<div class='container'>
            <div class='landing-message'>
                <h1>Allie Attempts CS 313</h1>
                <h2>follow along as she (maybe) figures out the internet</h2>
            </div>
    <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
  <defs>
	  <symbol id='arrow' viewBox='0 0 100 100'>
	  	<path d='M12.5 45.83h64.58v8.33H12.5z'/>
    		<path d='M59.17 77.92l-5.84-5.84L75.43 50l-22.1-22.08 5.84-5.84L87.07 50z'/>
	  </symbol>
  </defs>
</svg>

<div class='homebox'>
	<div class='innerbox'>
		<a href='http://cs313.allieglaser.com/index.php?assignments=1' class='button'>
			Assignments
			<span>
				<svg>
					<use xlink:href='#arrow' href='#arrow'></use>
				</svg>
			</span>
		</a>
		
	</div>
	
</div>
    </div>";
}

echo $footer;

?>