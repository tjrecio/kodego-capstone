<?php

session_start();

require_once "config.php";


$sql = "SELECT drugprice090822.drug, drugprice090822.price FROM drugprice090822 WHERE drugprice090822.drug = 'medicine 3'";

if ($result = mysqli_query($link, $sql)) {
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      // echo "<tr>";


      // echo $row['drug'];
      // echo $row['price'];

      // $lenght=count($row);
      // echo $lenght;

      // echo "<td>" . $row['first_name'] . "</td>";
      // echo "<td>" . $row['last_name'] . "</td>";
      // echo "<td>" . $row['email'] . "</td>";
      // echo "</tr>";

      // echo "</table>";
      // Close result set

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
        <link rel="stylesheet" href="styles090622.css">
        <script src="script090422.js"></script>
        <title>Search Meds - 090622</title>
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

            <form id="formlm" method="POST" action="locatemed090622.php">

              <div id="drugSearch">
                <div>
                  <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
                  <div><input class="inputBoxDrug" type="text" name="drug"></div>
                </div>
                <button id="drugSearchBtn" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
              <br>
              <div id="drugOutput">
                <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
                <div><input class="inputBoxLm" type="text" name="drug" style="padding-left: 5px;" value="<?php echo $row['drug']; ?>"></div>
              </div>
              <div id="priceOutput">
                <div style="font-size: 80%;"><i class="fa-solid fa-peso-sign"></i>&nbspPrice</div>
                <div><input class="inputBoxLm" type="float" name="price" style="padding-left: 5px; padding-right: 5px; width: 145px; text-align: end;" value="<?php echo $row['price']; ?>"></div>
              </div>
              <br>


        <?php
      }
      mysqli_free_result($result);
    } else {
      echo "No records matching your query were found.";
    }
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  // Close connection
  mysqli_close($link);
        ?>


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