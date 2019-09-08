<?php
  $sendername = htmlspecialchars($_POST['sendername']);
  $senderemail = htmlspecialchars($_POST['senderemail']);
  $sendermessage = htmlspecialchars($_POST['sendermessage']);
  $endmessage = " From: $sendername \n Email: $senderemail \n Message: $sendermessage";
  mail("cymiranda3@gmail.com", "Message From: ".$senderemail, "message ".$sendermessage, "sender_name ".$sendername);
  header('Location: successful.php');
?>
