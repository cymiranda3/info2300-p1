<!--Created by Constantin Miranda for INFO 2300 -->

<?php
$current_page_id = "contact";
include("includes/init.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
  <link href="styles/all.css" rel="stylesheet"/>
</head>

<body>
  <?php include("includes/header.php");?>

  <h1 class="reading">Slide into my DMs...</h1>
  <form action="send.php" method="POST" class="contact-section">
    <p>Name:</p> <input type="text" name="sendername" placeholder="Name">
    <p>Email:</p> <input type="text" name="senderemail" placeholder="Email">
    <p>Message:</p><textarea name="sendermessage" rows="7" cols="50"></textarea><br>
    <input class = "submit" type="submit" value="Send It!" name="successful.php">
  </form>

  <section class="footer-section">
    <div id="footer">
      <?php include("includes/footer.php");?>
    </div>
  </section>

</body>
</html>
