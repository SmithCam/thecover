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

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="contact.php">Get in Contact!</a></h2>
										<p class="readable">Do you have a suggestion for a book to review or an update for the site? Do you want to contribute to The Cover, or procure a site of your own? Did you want to tell me how this blog changed your life? Maybe you just want to tell me how wrong I am about your favorite book? Whatever your reason, I would love to hear from you!</p> 
										<p class="readable">Send an email message or find The Cover on social media below!</p>
									</div>
								</header>

								<div class="fcf-body">
									<div id="fcf-form">
									    <h3 class="fcf-h3">Contact</h3>

									    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
									        
									        <div class="fcf-form-group">
									            <label for="Name" class="fcf-label">Name</label>
									            <div class="fcf-input-group">
									                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
									            </div>
									        </div>

									        <div class="fcf-form-group">
									            <label for="Email" class="fcf-label">Email Address</label>
									            <div class="fcf-input-group">
									                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
									            </div>
									        </div>

									        <div class="fcf-form-group">
									            <label for="Message" class="fcf-label">Message</label>
									            <div class="fcf-input-group">
									                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000"></textarea>
									            </div>
									        </div>

									        <div class="fcf-form-group">
									            <button type="submit" id="fcf-button" class="button fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block send-button">Send Message</button>
									        </div>
									    </form>
									    </div>
									</div>

								<div class ="row">
								<h2 class ="about-social-label">The Cover:</h2>
									<ul class="icons">
										<li><a href="https://twitter.com/CoverBookBlog" target ="_blank" class="icon brands fa-twitter about-socials about-socials-left"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/" target ="_blank" class="icon brands fa-facebook-f about-socials"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/thecoverbookblog/" target ="_blank" class="icon brands fa-instagram about-socials"><span class="label">Instagram</span></a></li>
										<li><a href="https://www.goodreads.com/review/list/127761504-cameron-smith?ref=nav_mybooks&shelf=read#" target ="_blank" class="fa-brands fa-goodreads-g about-socials"><span class="label">Goodreads</span></a></li>
										<li><a href="contact.php" class="icon solid fa-envelope about-socials"><span class="label">Email</span></a></li>
									</ul>
								</div>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<p class="copyright">&copy; The Cover 2022. Created by Cameron Smith.</p>
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