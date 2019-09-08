<!--Created by Constantin Miranda for INFO 2300 -->

<?php
$current_page_id = "index";
include("includes/init.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Constantin Miranda</title>
  <link href="styles/all.css" rel="stylesheet"/>
</head>

<body>
  <?php include("includes/header.php");?>

  <section class="home_content">
    <div class="image">
      <img src="images/about_cm.png"> <!--Source: Legacy Studios -->
    </div>
    <div class="statement">
      <h1> This is me. </h1>
      <p id="description"> I am a sophomore at Cornell University from Washington, DC. I am majoring in Information Science with a concentration in UI/UX design and am minoring in business. My passions include web development, graphic design, investment analysis, and skiing.</p>
      <p id="credit">Image Credit: Legacy Studios</p>
    </div>
  </section>

  <section class="footer-section">
    <div id="footer">
      <?php include("includes/footer.php");?>
    </div>
  </section>

</body>
</html>
