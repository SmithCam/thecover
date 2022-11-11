
<html>
		<head>
		<title>Posts Feed</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="https://kit.fontawesome.com/6f4d796be0.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/x-icon" href="images/worm-solid.svg">
	</head>
	<body class="single is-preload">
<?php
include 'db.php';
$result = $conn -> query("SELECT * FROM posts ORDER BY ID DESC");

$highest = $conn -> query("SELECT ID FROM posts ORDER BY ID DESC LIMIT 1");
$limit = $highest -> fetch_array(MYSQLI_ASSOC);

//for now..,
$index = $limit;
?>
		<!-- Wrapper -->
			<div id="wrapper">

				<header id="header">
						<h1><a href="index.php" class="logo-word">The Cover</a></h1>

						<nav class="links">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="posts.php">Posts</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="mailto:contact@thecoverblog.com?subject=Subscribe%20to%20The%20Cover!&body=Sign%20me%20up!" class ="subscribe-button" target="_blank">Subscribe!</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="index.php">
											<h3>Home</h3>
										</a>
									</li>
									<li>
										<a href="posts.php">
											<h3>Posts</h3>
										</a>
									</li>
									<li>
										<a href="about.php">
											<h3>About</h3>
										</a>
									</li>
									<li>
										<a href="contact.php">
											<h3>Contact</h3>
										</a>
									</li>
									<li><a href="mailto:contact@thecoverblog.com?subject=Subscribe%20to%20The%20Cover!&body=Sign%20me%20up!" target="_blank"><h3>Subscribe!</h3></a></li>
								</ul>
							</section>
					</section>

						<!-- Post -->
						<?php while($row = $result -> fetch_array(MYSQLI_ASSOC)):?>
						<div>
							<article class="post posts">
								<header>
									<div class="title">
										<h2><a href="<?php echo $row['FILENAME'] ?>"><?php echo $row['TITLE'] ?></a></h2>
										<p class="subheading"><?php echo $row['SUBHEADING'] ?></p>
									</div>
									<div class="meta"> 
										<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										<a href="about.php" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
									</div>
								</header>
								<a href="<?php echo $row['FILENAME'] ?>" class="image featured"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
								<p><?php echo $row['BLURB'] ?></p>
								<footer>
									<ul class="actions">
										<li><a href="<?php echo $row['FILENAME'] ?>" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="<?php echo $row['FILENAME'] ?>"><?php echo $row['TAGONE'] ?></a></li>
										<li><a href="<?php echo $row['FILENAME'] ?>"><?php echo $row['TAGTWO'] ?></a></li>
									</ul>
								</footer>
							</article>
						</div>
					<?php endwhile;?>

			<!-- <form>
				<button value = 5 name="more" ">Show More</button>
			</form> -->

				<!-- Footer -->
					<section id="footer">
								<ul class="icons">
									<li><a href="https://www.twitter.com/" target ="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.google.com/search?q=the+year+is+2022" target ="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/thecoverbookblog/" target ="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.goodreads.com/review/list/127761504-cameron-smith?ref=nav_mybooks&shelf=read#" target ="_blank" class="fa-brands fa-goodreads-g"><span class="label">Goodreads</span></a></li>
									<li><a href="contact.php" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; The Cover 2022. Created by <a href="www.google.com">Cameron Smith.</p>
							</section>

			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>