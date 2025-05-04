<?php
$page_title = "Adult-Learn";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/card.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Adult.css">
    <title>Adult Learn</title>
</head>
<body>
<div class="container">
    <div class="MainImage">
      <img src="assets/img/MainImage.jpg" alt="Main Image">
    </div>
    <div class="AdultText">
      <h1>Bridging Generations: An Adult’s Journey to Grandparental Roots</h1>
    </div>
</div>

<div class="container-2">
    <div class="Explore-class">
      <h3>Explore the cultural heritage of the world and make unexpected connections with a breadth of programming designed for adults of all ages including talks, debates, performances, study days and short courses.</h3>
    </div>
    <div class="Second-Text">
      <p>Watch our latest events on demand and for free on the Heritage Museum</p>
      <a href="#">Our Latest Lectures</a>
    </div>
</div>  

<div class="split-line">
    <span class="line"></span>
    <span class="right-text">Exhibitions and events ➤</span>
</div>

<?php displayCards(); ?>

<?php require_once 'includes/footer.php'; ?>
</body>
</html>
