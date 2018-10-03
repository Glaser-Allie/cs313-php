<?php
session_start();

require("layout.php");

// **DISPLAY PAGE**
echo $header;

// Assignments
if(isset($_GET['assignments'])) {
	
    // Display Assignment Links
    
    echo"<div class='container assigned'>
            <div class='assignments'>
                <h1>Assignments<br /></h1>
                <ul>
                    <li>Week 3</li>
                    <li><a href='/team/wk3'>Team Activity</a></li>
                    <li><a href='/store'>Ponder: Store</a></li>
                </ul>
                <ul>
                    <li>Week 4</a></li>
                    <li><a href='#'>Team Activity</a></li>
                    <li><a href='#'>Ponder: TBA</a></li>
                </ul>
                <ul>
                    <li>Week 4</a></li>
                    <li><a href='#'>Team Activity</a></li>
                    <li><a href='#'>Ponder: TBA</a></li>
                </ul>
                <ul>
                    <li>Week 5</a></li>
                    <li><a href='#'>Team Activity</a></li>
                    <li><a href='#'>Ponder: TBA</a></li>
                </ul>
                <ul>
                    <li>Week 6</a></li>
                    <li><a href='#'>Team Activity</a></li>
                    <li><a href='#'>Ponder: TBA</a></li>
                </ul>
                <ul>
                    <li>Week 7</a></li>
                    <li><a href='#'>Team Activity</a></li>
                    <li><a href='#'>Ponder: TBA</a></li>
                </ul>
                <ul>
                    <li>Week 8</a></li>
                    <li><a href='#'>Team Activity</a></li>
                    <li><a href='#'>Ponder: TBA</a></li>
                </ul>
            </div>";
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