<?php
session_start();
if (!isset($_SESSION['username'])) {
  $errormessage = "Oops! Your need to login first.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6e0e3f1ae2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style090622.css">
  <script src="script090422.js"></script>
  <title>Dashboard - 090622</title>
</head>

<body>
  <div id="container">

    <?php include 'headerloggedin.php' ?>

    <div id="main">

      <div>
        <p style="font-size: 30px; margin:10px;"><b>Welcome, <?php echo $_SESSION['username']; ?>!</b></p>
        <!-- <p style="font-size: 12px; margin:0px; margin-bottom: 20px;">Fill in the fields below to sign-in.</p> -->
      </div>


      <?php
      if (isset($errormessage)) {
        echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
      }
      ?>

    </div>

    <?php include 'footer.php' ?>

  </div>
</body>
</html>