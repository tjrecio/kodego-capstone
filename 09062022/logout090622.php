<!DOCTYPE html>
<?php
session_start();
session_unset();
session_destroy();

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6e0e3f1ae2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style090622.css">
  <script src="script090622.js"></script>
  <title>Logout - 090622</title>
</head>

<body>
  <?php
  include "header.php";
  ?>

  <div id="main">

    <div>
      <p style="font-size: 25px; margin:10px;"><b>You have successfully logged out.</b></p>
    </div>


  </div>

  <?php
  include "footer.php";
  ?>
</body>

</html>