<?php

session_start();
require "config.php";

$row['0'] = "";
$row['1'] = "";
$row2[] = "";

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwhT23_kcZzV8UymJ0bIdLnnw0oVvCaFk"></script>
  <title>TEST multi - 090622</title>

  <script>
    google.maps.event.addDomListener(window, 'load', initMap);
  </script>

</head>

<body>
  <div id="container">

    <?php include 'header.php' ?>

    <div id="main">

      <?php

      if (isset($_POST['beginsearch'])) {

        if (!empty($_POST['drug'])) {
          $drug = $_POST['drug'];

          $query = "SELECT drugprice090822.drug, drugprice090822.price FROM drugprice090822 WHERE drugprice090822.drug = '$drug';";

          $query_run = mysqli_query($link, $query);

          $row = mysqli_fetch_row($query_run);
        } else {
          $errormessage = "Nothing Selected.";
          $row['0'] = "";
          $row['1'] = "";
        }
      }
      ?>


      <div id="mainLeft">
        <div>
          <div>
            <p style="font-size: 30px; margin-bottom: 0px; display: flex; flex-wrap: nowrap; justify-content: center"><b>Welcome!</b></p>
          </div>
          <div>
            <p style="font-size: 12px; margin-bottom: 20px; display: flex; flex-wrap: nowrap; justify-content: center">Search for your needed medicines here</p>
          </div>
        </div>

        <div id="formlm">

          <form id="" method="POST" action="awstore.php">

            <div id="drugSearch">
              <div>
                <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspSearch your Medicine</div>
                <div><input class="inputBoxDrug" type="text" name="drug" placeholder="type-in medicine by prescription name..."></div>
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
        </div>

        <div id="formlm" style="height: 330px;">
          <div style="background-color:white; display: flex; flex-wrap: nowrap;">
            <div style="width: 35%; display: flex; flex-wrap: nowrap; justify-content: center">
              Store
            </div>
            <div style="width: 65%; display: flex; flex-wrap: nowrap; justify-content: center">
              Address
            </div>
          </div>
          <div id="tableresult" style="height: 300px; overflow-y: auto; border-style: none; border-radius: 0px;">
            <table>
              <?php
              if (isset($_POST['beginsearch'])) {

                if (!empty($_POST['drug'])) {
                  $drug = $_POST['drug'];

                  $query2 = "
                SELECT
                    inventory090822.store,
                    storeinfo090822.address
                FROM
                    inventory090822
                LEFT JOIN storeinfo090822
                ON inventory090822.storeID = storeinfo090822.storeID
                WHERE `$drug` = 1";

                  $query_run2 = mysqli_query($link, $query2);

                  while ($row2 = mysqli_fetch_array($query_run2, MYSQLI_ASSOC)) {

              ?>

                    <tr>
                      <td style="border-style: none; border-radius: 0px;"><?php echo htmlspecialchars($row2['store']); ?></td>
                      <td style="border-style: none; border-radius: 0px;"><?php echo htmlspecialchars($row2['address']); ?></td>
                    </tr>

              <?php
                  }
                }
              }
              ?>

            </table>
          </div>
        </div>
      </div>

      <div id="mainRight">

        <!-- script -->
        <script>
          function initMap() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
              mapTypeId: 'roadmap'
            };

            map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
            map.setTilt(100);

            // adding multiple markers to map
            var infoWindow = new.google.maps.infoWindow(),
              marker, i;

            // place markers on the map
            for (i = 0; i < $row3.length; i++) {
              var position = new google.maps.LatLng($row3[i][2], $row3[i][3]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                position: position,
                map: map,
                title: $row3[i][0]
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infoWindow.setContent(infoWindowContent[1][0]);
                  infoWindow.open(map, marker);
                }
              })(marker, i));

              map.fitbounds(bounds);
            }

            // zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds changed', function(event) {
              this.setZoom(14);
              google.maps.event.removeListener(boundsListener);
            });
          }
        </script>

        <div id="mapCanvas">
          <?php
          if (isset($_POST['beginsearch'])) {

            if (!empty($_POST['drug'])) {
              $drug = $_POST['drug'];

              $query3 = "
                  SELECT
                  inventory090822.store,
                  storeinfo090822.lat,
                  storeinfo090822.lon
                  FROM
                  inventory090822
                  LEFT JOIN storeinfo090822
                  ON inventory090822.storeID = storeinfo090822.storeID
                  WHERE `$drug` = 1";

              $query_run3 = mysqli_query($link, $query3);

              while ($row3 = mysqli_fetch_all($query_run3, MYSQLI_ASSOC)) {
                echo htmlspecialchars($row3[0]["store"]);
                echo htmlspecialchars($row3[0]["lat"]);
                echo htmlspecialchars($row3[0]["lon"]);
                echo htmlspecialchars($row3[1]["store"]);
                echo htmlspecialchars($row3[1]["lat"]);
                echo htmlspecialchars($row3[1]["lon"]);
                echo htmlspecialchars($row3[2]["store"]);
                echo htmlspecialchars($row3[2]["lat"]);
                echo htmlspecialchars($row3[2]["lon"]);
              };
          ?>
        </div>
    <?php
            }
          }
          mysqli_close($link);
    ?>

      </div>

    </div>

  </div>
</body>

</html>