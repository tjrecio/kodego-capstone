<?php

session_start();
require_once "config.php";

$row['0'] = "";
$row['1'] = "";

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
  <title>TEST multi - 090622</title>
</head>

<body>
  <div id="container">

    <?php include 'header.php' ?>

    <div id="main">

      <div>
        <div>
          <p style="font-size: 30px; margin-bottom: 0px; display: flex; flex-wrap: nowrap; justify-content: center"><b>Welcome!</b></p>
        </div>
        <div>
          <p style="font-size: 12px; margin-bottom: 20px;">Search for your needed medicines here</p>
        </div>
      </div>

      <?php
      //main mysqli
      if (isset($_POST['beginsearch'])) {

        if (!empty($_POST['drug'])) {
          $drug = $_POST['drug'];

          $query = "
          SELECT drugprice090822.drug, drugprice090822.price FROM drugprice090822 WHERE drugprice090822.drug = '$drug';
          SELECT inventory090822.store, storeinfo090822.lat, storeinfo090822.lon FROM inventory090822 LEFT JOIN storeinfo090822 ON inventory090822.storeID = storeinfo090822.storeID WHERE '$drug' = 1";

          if($query_run = mysqli_multi_query($link, $query)){

            do{
              if (){

              }
              mysqli_free_result($link)
            }while(){ //second SELECT

            }

          }
























          $row = mysqli_fetch_row($query_run);


        } else {
          $errormessage = "Nothing Selected.";
          $row['0'] = "";
          $row['1'] = "";
        }
        mysqli_close($link);
      }

      var_dump($row);
      ?>

      <div id="formlm">

        <form id="" method="POST" action="awstores.php">

          <div id="drugSearch">
            <div>
              <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
              <div><input class="inputBoxDrug" type="text" name="drug" style="padding-left: 5px; width: 480px;" placeholder="type-in medicine by prescription name..."></div>
            </div>
            <!-- search button -->
            <button id="drugSearchBtn" type="submit" name="beginsearch"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
          <div id="errorSpace">
            <?php
            if (isset($errormessage)) {
              echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
            }
            ?>
          </div>
        </form>
        <div id="drugOutput">
          <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
          <div><input class="inputBoxLm" type="text" name="drug1" style="padding-left: 5px;" value="<?php echo htmlspecialchars($row['0']); ?>"></div>
        </div>
        <div id="priceOutput">
          <div style="font-size: 80%;"><i class="fa-solid fa-peso-sign"></i>&nbspPrice</div>
          <div><input class="inputBoxLm" type="float" name="price" style="padding-left: 5px; padding-right: 5px; width: 145px; text-align: end;" value="<?php echo htmlspecialchars($row['1']); ?>"></div>
        </div>
        <br>
      </div>
    </div>

    <?php include 'footer.php' ?>

  </div>
</body>

</html>