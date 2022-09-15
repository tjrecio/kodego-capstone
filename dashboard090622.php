<?php

session_start();
require "config.php";

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

      <!-- query 5 -->
      <?php
      $username = $_SESSION['username'];

      $query5 = "SELECT
      storeinfo090822.storeID,
      storeinfo090822.store,
      storeinfo090822.address,
      users090822.username
      FROM
      storeinfo090822
      LEFT JOIN users090822 ON storeinfo090822.storeID = users090822.storeID
      WHERE
      users090822.username = '$username'";

      $query_run5 = mysqli_query($link, $query5);

      $row5 = mysqli_fetch_row($query_run5);

      mysqli_close($link);
      ?>
      <!-- query 5 -->


      <div id="dboardMain">
        <div id="dboardMainTop">
          <p style="font-size: 30px; margin:10px;"><b>Welcome, <?php echo $_SESSION['username']; ?>!</b></p>
        </div>
        <div id="dboardMainBottom">
          <div id="dboardMainBottomHeader">
            <div style="margin-bottom: 15px; width: 100%; display: flex; justify-content: space-evenly; align-self: center;">
              <div style="width: 70%;">
                <div style="font-size: 80%;"><i class="fa-solid fa-tag"></i>&nbspStore Name</div>
                <input id="store" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 400px; border-style: none; border-radius: 5px;" value="<?php echo htmlspecialchars($row5['1']); ?>">
              </div>
              <div style="width: 30%;">
                <div style="font-size: 80%;"><i class="fa-solid fa-hashtag"></i>&nbspStore ID</div>
                <input id="storeID" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 200px; border-style: none; border-radius: 5px;" value="<?php echo htmlspecialchars($row5['0']); ?>">
              </div>
            </div>
            <div>
              <div style="font-size: 80%;"><i class="fa-solid fa-location-dot"></i>&nbspStore Address</div>
              <input id="address" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 690px; border-style: none; border-radius: 5px;" value="<?php echo htmlspecialchars($row5['2']); ?>">
            </div>
          </div>
          <div id="dboardMainBottomBody">
            <div id="dboardMainBottomBodyTableOps" style="display: flex; justify-content: space-evenly; align-self: center;">

              <div style="margin-bottom: 15px; width: 100%; display: flex; justify-content: space-evenly; align-self: center;">
                <div style="width: 70%;">
                </div>
                <div style="width: 30%; display: flex; flex-wrap: wrap; justify-content: flex-end;">
                  <button id="buttonstyleheaderRight"><i class="fa-solid fa-floppy-disk"></i>&nbspSave Changes</button>
                </div>
              </div>

            </div>
            <div id="dboardMainBottomBodyTable">
              //
              <div style="background-color:white; display: flex; flex-wrap: nowrap;">
                <div style="width: 65%; display: flex; flex-wrap: nowrap; justify-content: center">
                  Drug Name and Description
                </div>
                <div style="width: 35%; display: flex; flex-wrap: nowrap; justify-content: center">
                  Availability
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

              //
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</body>

</html>