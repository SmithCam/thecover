
<html>
		<head>
		<title>Post Title</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="https://kit.fontawesome.com/6f4d796be0.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/x-icon" href="images/worm-solid.svg">
	</head>
	<body class="single is-preload">
<?php
$servername = "70.40.220.182";
$username = "thecowb0_csmith";
$password = "Braves05!";
$database = "thecowb0_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$file = basename(__FILE__);
$result = $conn -> query("SELECT * FROM posts WHERE FILENAME = '$file' LIMIT 1");

// array
$row = $result -> fetch_array(MYSQLI_ASSOC);

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
								</ul>
							</section>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#"><?php echo $row['TITLE'] ?></a></h2>
										<p><?php echo $row['SUBHEADING'] ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										<a href="#" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></span>
								<p>"<?php echo $row['BODY'] ?></p>
									<?php
									if(isset($_POST['like'])) {
										$sql = "UPDATE posts SET LIKES=LIKES+1 WHERE FILENAME= '$file'";
										$conn->query($sql);
										header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
   									exit();
									}
									if(isset($_POST['dislike'])) {
										$sql = "UPDATE posts SET LIKES=LIKES-1 WHERE FILENAME= '$file'";
										$conn->query($sql);
										header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
   									exit();
									}
									?>
							    <form class = "no-bottom" method="post">
							        <button class="like icon fa-2x solid fa-thumbs-up" type="submit" name="like"
							                value="like"/></button>
							          
							        <button class="like icon fa-2x solid fa-thumbs-down" type="submit" name="dislike"
							                value="dislike"/></button>
							    </form>
							  <footer>
									<ul class="stats">
										<li><a href="#"><?php echo $row['TAGONE'] ?></a></li>
										<li><a href="#" class="icon solid fa-heart"><?php echo $row['LIKES'] ?></a></li>
									</ul>
								</footer>
							</article>



					</div>

				<!-- Footer -->
					<section id="footer">
								<ul class="icons">
									<li><a href="https://twitter.com/CoverBookBlog" target ="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
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