	<div class="headerContainer">
		<div class="headerImage" style="margin-left:250px; margin-bottom:50px;"><img src="pictures/MARIO.png"></div>
		<h1 id="headerTitle">McRiteh</h1>
		<div class="headerImage" style="margin-right:250px"><img src="pictures/GHOST.png"></div>
	</div>

	<div class="navbar">
		<ul>
  			<li><a href="index.php">Home</a></li>
  			<li><a href="#">About Us<i class="far fa-hand-point-down"></i></a>
				<ul class="dropdown-1">
					<li><a href="history.php">Our History</a></li>
					<li><a href="reviews.php">Reviews</a></li>
					<li><a href="employment.php">Employment</a></li>
				</ul>
			</li>
  			<li><a href="menu.php">Dank Menu</a></li>
  			<?php if(isset($_SESSION['loggedon'])){ ?>
			<li style="border-right: none;"><a href="#">My Account<i class="far fa-hand-point-down"></i></a>
				<ul class="dropdown-1">
					<li><a href="myinfo.php">My info</a></li>
					<li><a href="myorders.php">My orders</a></li>
					<li><a href="index.php?logout='1'" onclick="reset()">logout</a></li>
				</ul>
			</li>
			<?php }else{ ?>
			<li><a href="authentication.php">Signup/login</a></li>	
			<?php } ?>
		</ul>
  	</div>
