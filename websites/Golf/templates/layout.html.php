<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/styles.css"/>
		<title><?=$title?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Stuart Balls, </h1>
			<h1>The Best Prices Around</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/GolfEquipment/list">Our Products</a></li>
			<li><a href="/about">About Us</a></li>
			<li><a href="/faq">FAQ's</a></li>
			<li><a href="/basket">Basket</a></li>
			<li><a href="/membership">Membership</a></li>
			<li><a href="/buggyhire">Buggy Hire</a></li>
			<?php if(isset($_SESSION['loggedin'])){?>
			<li><a href="/">Booking Rounds</a></li>
			<?php if($_SESSION['type'] == "A"){?>
			<li><a href="/">Admin</a></li>
			<?php }} ?>
			
		</ul>

	</nav>
<img class="banner" src="/images/randombanner.php"/>
	
    <?=$output?>


	<footer>
		&copy; The Golf Shop 2020
	</footer>
</body>
</html>