<?php

session_start();

require_once "config.php";

if(isset($_GET['drug'])){



$sql = "SELECT drugprice090822.drug, drugprice090822.price FROM drugprice090822 WHERE drugprice090822.drug = $drug";

$result = mysqli_query($link, $sql);
$drugprice = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($link);

var_dump($drugprice);

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
  <title>TEST - 090622</title>
</head>

<body>
  <div id="container">

    <?php include 'headerloggedin.php' ?>

    <div id="main">

      <div>
        <div>
          <p style="font-size: 30px; margin-bottom: 0px; display: flex; flex-wrap: nowrap; justify-content: center"><b>Welcome!</b></p>
        </div>
        <div>
          <p style="font-size: 12px; margin-bottom: 20px;">Search for your needed medicines here</p>
        </div>
      </div>

      <form id="formlm" method="POST" action="locatemed090622.php">

        <div id="drugSearch">
          <div>
            <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
            <div><input class="inputBoxDrug" type="text" name=""></div>
          </div>
          <button id="drugSearchBtn" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <br>
        <div id="drugOutput">

          <?php
          foreach ($drugprice as $drugpriceresult);
          ?>

          <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
          <div><input class="inputBoxLm" type="text" name="drug" style="padding-left: 5px;" value="<?php echo htmlspecialchars($drugpriceresult['drug']) ?>"></div>
        </div>
        <div id="priceOutput">
          <div style="font-size: 80%;"><i class="fa-solid fa-peso-sign"></i>&nbspPrice</div>
          <div><input class="inputBoxLm" type="float" name="price" style="padding-left: 5px; padding-right: 5px; width: 145px; text-align: end;" value="<?php echo htmlspecialchars($drugpriceresult['price']) ?>"></div>
        </div>
        <div id="errorSpace">

          <?php
          if (isset($errormessage)) {
            echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
          }
          ?>

        </div>
      </form>

    </div>

    <?php include 'footer.php' ?>

  </div>
</body>
</html>