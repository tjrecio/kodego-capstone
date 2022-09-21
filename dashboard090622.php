<?php

session_start();
require "config.php";

if (!isset($_SESSION['username'])) {
  $errormessage = "Oops! Your need to login first.";
}

$row5['1'] = "";
$row5['0'] = "";
$row5['2'] = "";


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
  <script src="index.js"></script>
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

      // mysqli_close($link);
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
                <div style="font-size: 80%;"><i class="fa-solid fa-store"></i>&nbspStore Name</div>
                <input id="store" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 400px; border-style: none; border-radius: 5px;" value="<?php echo htmlspecialchars($row5['1']); ?>">
              </div>
              <div style="width: 30%;">
                <div style="font-size: 80%;"><i class="fa-solid fa-id-card"></i>&nbspStore License Number</div>
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
              </div>

            </div>
            <div id="dboardMainBottomBodyTable">
              <div style="background-color:white; display: flex; flex-wrap: nowrap;">
                <div style="width: 65%; display: flex; flex-wrap: nowrap; justify-content: center">
                  Drug Name and Description
                </div>
                <div style="width: 35%; display: flex; flex-wrap: nowrap; justify-content: center">
                  Availability
                </div>
              </div>
              <div id="tableresult" style="height: 300px; overflow-y: auto; border-style: none; border-radius: 0px;">
                <table style="background-color:white;">

                  <!-- query 6 -->
                  <?php
                  // linking $query5 and $query6
                  $storeID = $row5['0'];

                  include 'query6sqlsyntax.php';

                  $query_run6 = mysqli_query($link, $query6);

                  while ($row6 = mysqli_fetch_array($query_run6, MYSQLI_ASSOC)) {

                    // var_dump($row6);
                  ?>
                    <tr>
                      <td style="padding-left: 5px; width: 460px; border-style: none; border-radius: 0px;"><?php echo htmlspecialchars($row6['medicine']); ?></td>
                      <td style="width: 90px; font-size: 13px; border-style: none; border-radius: 0px; text-align: center">
                        <?php
                        if (htmlspecialchars($row6['avl']) == 1) {
                          echo "<p style='color: green;'>available</p>";
                        } else {
                          echo "<p style='color: red;'>not available</p>";
                        };

                        ?>
                      </td>
                      <td style="width: 50px; font-size: 13px; border-style: none; border-radius: 0px; text-align: center">
                        <a href="mededit090622.php?storeID=<?= $row6['storeid'] ?>&medicine=<?= $row6['medicine'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                      </td>
                    </tr>
                  <?php
                  };

                  mysqli_close($link);
                  ?>
                  <!-- query 6 -->

                </table>
              </div>
              <div id="errorSpace">
                <?php
                if (isset($errormessage)) {
                  echo '<i class="fa-solid fa-circle-exclamation"></i>' . "&nbsp" . $errormessage;
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>