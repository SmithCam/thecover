<html>
  <head>
    <title>The Cover</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <script src="https://kit.fontawesome.com/6f4d796be0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" type="image/x-icon" href="images/worm-solid.svg">
  </head>
<body>
<?php
include 'db.php';
$q = intval($_GET['q']);

$result = $conn -> query("SELECT '".$q."' FROM posts ORDER BY ID DESC");

while($row = $result -> fetch_array(MYSQLI_ASSOC)):?>
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
                    <li><a class="icon solid fa-heart"><?php echo $row['LIKES'] ?></a></li>
                  </ul>
                </footer>
              </article>
            </div>
          <?php endwhile;?>
<!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
      <script src="assets/js/main.js"></script>
</body>
</html>