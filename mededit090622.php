<?php

session_start();

require_once 'config.php';

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
  <title>Edit Availability - 090622</title>
</head>

<body>
  <div id="container">

    <?php // include 'header.php'

    if (isset($_GET["medicine"])) {
      // echo $_GET['storeID'];
      // echo $_GET['medicine'];

      $storeID = mysqli_real_escape_string($link, $_GET['storeID']);
      $medicine = mysqli_real_escape_string($link, $_GET['medicine']);

      $query7 = "
      SELECT
      inventory090822.*
  FROM
      `inventory090822`
  WHERE
      inventory090822.storeid = '$storeID' AND
  (`$medicine` = '0' OR `$medicine` = '1')";

      $query_run7 = mysqli_query($link, $query7);

      $row7 = mysqli_fetch_array($query_run7, MYSQLI_ASSOC);

      // var_dump($row7);


    } else {
      echo "error";
    }

    ?>

    <div id="main">

      <form id="formMainEdit" method="POST" action="*">
        <div>
          <p style="font-size: 30px; margin:0px;"><b>Edit Medicine Availability</b></p>
          <p style="font-size: 12px; margin:0px; margin-bottom: 20px;">Fill in the fields below to update your drug availability</p>
        </div>
        <div id="drugName">
          <div style="font-size: 80%;"><i class="fa-solid fa-file-prescription"></i>&nbspDrug Name</div>
          <div><input class="inputBox" style="border-style: solid; padding-left: 5px; width: 100%;" type="text" name="password" value="<?php echo mysqli_real_escape_string($link, $_GET['medicine']); ?>"></div>
        </div>
        <br>
        <div id="stockCheck">
          <div style="font-size: 80%;"><i class="fa-solid fa-clipboard-question"></i>&nbspAvailable in Store?</div>
          <div style="font-size: 70%; display: flex; justify-content: space-evenly;">
            <div style="width: 35%;"><input type="checkbox" name="withstock" value="1">&nbspAvailable</div>
            <div style="width: 35%;"><input type="checkbox" name="nostock" value="0">&nbspOut of Stock</div>
          </div>
        </div>
        <div id="errorSpace">

          <?php
          if (isset($errormessage)) {
            echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
          }
          ?>

        </div>
        <input id="submitBtn" type="submit" name="mededit">
      </form>

    </div>

  </div>
</body>

</html>