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
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" href="style090622.css">

  <title>TEST multi - 090622</title>
</head>

<body>
  <div id="container">

    <?php include 'header.php' ?>

    <div id="main">

      <!-- query 1 -->
      <?php
      if (isset($_POST['beginsearch'])) {

        if (!empty($_POST['drug'])) {
          $drug = $_POST['drug'];

          $query = "SELECT drugprice090822.drug, drugprice090822.pricerange FROM drugprice090822 WHERE drugprice090822.drug = '$drug';";

          $query_run = mysqli_query($link, $query);

          $row = mysqli_fetch_row($query_run);
        } else {
          $errormessage = "Nothing Selected.";
          $row['0'] = "";
          $row['1'] = "";
        }
      }
      ?>
      <!-- query 1 -->

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
          <form id="wrapper" method="POST" action="awstorewmap.php">
            <div class="drugSearch">
              <!-- search box -->
              <div class="search-input">
                <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspSearch your Medicine</div>
                <a href="" target="_blank" hidden></a>
                <div style="height: 100px;">
                  <input class="inputBoxDrug" type="text" name="drug" placeholder="type-in medicine by generic name...">
                  <div class="autocom-box">
                    <!-- here list are inserted from javascript -->
                  </div>
                </div>
              </div>
              <!-- search button -->
              <button id="drugSearchBtn" type="submit" style="font-size: 25px" name="beginsearch"><i class="fa-sharp fa-solid fa-magnifying-glass-location"></i></button>
            </div>
            <div id="errorSpace">
              <?php
              if (isset($errormessage)) {
                echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
              }
              ?>
            </div>
          </form>

          <div id="drugOutput" style="padding-bottom: 10px;">
            <div style="font-size: 80%;"><i class="fa-solid fa-prescription-bottle-medical"></i>&nbspMedicine</div>
            <div><input class="inputBoxLm" type="text" name="drug1" style="padding-left: 5px; width: 330px;" value="<?php echo htmlspecialchars($row['0']); ?>"></div>
          </div>
          <div id="priceOutput">
            <div style="font-size: 80%;"><i class="fa-solid fa-peso-sign"></i>&nbspPrice Range</div>
            <div><input class="inputBoxLm" type="float" name="price" style="padding-left: 5px; padding-right: 5px; width: 145px; text-align: end;" value="<?php echo htmlspecialchars($row['1']); ?>"></div>
          </div>
        </div>

        <div id="formlm" style="height: 330px;">
          <div style="">
            <div style="background-color: white; border-top-left-radius: 10px; border-top-right-radius: 10px; display: flex; flex-wrap: nowrap;">
              <div style="width: 35%; display: flex; flex-wrap: nowrap; justify-content: center">
                Store
              </div>
              <div style="width: 65%; display: flex; flex-wrap: nowrap; justify-content: center">
                Address
              </div>
            </div>
            <div id="tableresult" style="height: 300px; overflow-y: auto; border-style: none; border-radius: 0px;">
              <table>

                <!-- query 2 -->
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
                    };
                  };
                }
                ?>
                <!-- query 2 -->

              </table>
            </div>
          </div>
        </div>
      </div>

      <div id="mainRight">
        <div id="mapCanvas">

          <!-- query 3 and 4 -->
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

              $query4 = "
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
              $query_run4 = mysqli_query($link, $query4);
            }
          }
          mysqli_close($link);
          ?>
          <!-- query 3 and 4 -->

          <script>
            function initMap() {
              var bounds = new google.maps.LatLngBounds();
              var mapOptions = {
                mapTypeID: 'roadmap',
              };

              // Display a map on the web page
              const map = new google.maps.Map(document.getElementById("mapCanvas"), {
                zoom: 12,
                center: {
                  lat: 14.676208,
                  lng: 121.043861
                },
              });

              // Multiple markers location, lat and lon
              var markers = [
                <?php
                if ($query_run3->num_rows > 0) {
                  while ($row3 = $query_run3->fetch_assoc()) {
                    echo '["' . $row3['store'] . '", ' . $row3['lat'] . ', ' . $row3['lon'] . '],';
                  }
                }
                ?>
              ];

              // info window content
              var infoWindowContent = [
                <?php
                if ($query_run4->num_rows > 0) {
                  while ($row4 = $query_run4->fetch_assoc()) {
                ?>["<?php echo $row4['store']; ?>"],
                <?php
                  }
                }
                ?>
              ];

              // add multiple markers to map
              var infoWindow = new google.maps.InfoWindow(),
                marker, i;

              // place each marker on the map
              for (i = 0; i < markers.length; i++) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                  position: position,
                  map: map,
                  title: markers[i][0]
                });

                // add info window to marker
                google.maps.event.addListener(marker, 'hover', (function(marker, i) {
                  return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open
                  }
                })(marker, i));

                // center map to fit all markers on the screen
                map.fitBounds(bounds);
              }

              // set zoom level
              var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(12);
                google.maps.event.removeListener(boundsListener);
              });
            }
          </script>
          <script>
            // load initialize function
            window.initMap = initMap;
          </script>
        </div>
      </div>
    </div>
  </div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwhT23_kcZzV8UymJ0bIdLnnw0oVvCaFk&callback=initMap&v=weekly" defer></script>
  <script src="suggestions.js"></script>
  <script src="index.js"></script>
</body>

</html>