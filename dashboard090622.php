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
      <div id="dboardMain">
        <div id="dboardMainTop">
          <p style="font-size: 30px; margin:10px;"><b>Welcome, <?php echo $_SESSION['username']; ?>!</b></p>
          <!-- <p style="font-size: 12px; margin:0px; margin-bottom: 20px;">Fill in the fields below to sign-in.</p> -->
        </div>
        <div id="dboardMainBottom">
          <div id="dboardMainBottomHeader">
            <div style="margin-bottom: 15px; width: 100%; display: flex; justify-content: space-evenly; align-self: center;">
              <div style="width: 70%;">
                <div style="font-size: 80%;"><i class="fa-solid fa-tag"></i>&nbspStore Name</div>
                <div><input id="store" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 400px; border-style: none; border-radius: 5px;"></div>
              </div>
              <div style="width: 30%;">
                <div style="font-size: 80%;"><i class="fa-solid fa-hashtag"></i>&nbspStore ID</div>
                <input id="storeID" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 200px; border-style: none; border-radius: 5px;">
              </div>
            </div>
            <div>
              <div style="font-size: 80%;"><i class="fa-solid fa-location-dot"></i>&nbspStore Address</div>
              <input id="address" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 690px; border-style: none; border-radius: 5px;">
            </div>
          </div>
          <div id="dboardMainBottomBody">
            <div id="dboardMainBottomBodyTableOps" style="display: flex; justify-content: space-evenly; align-self: center;">

              <div style="margin-bottom: 15px; width: 100%; display: flex; justify-content: space-evenly; align-self: center;">
                <div style="width: 70%;">
                  <!-- <div style="font-size: 80%;"><i class="fa-solid fa-tag"></i>&nbspStore Name</div>
                  <div><input id="store" style="padding-left: 5px; padding-right: 5px; height: 25px; width: 400px; border-style: none; border-radius: 5px;"></div> -->
                </div>
                <div style="width: 30%; display: flex; flex-wrap: wrap; justify-content: flex-end;">
                  <button id="buttonstyleheaderRight"><i class="fa-solid fa-floppy-disk"></i>&nbspSave Changes</button>
                </div>
              </div>

            </div>
            <div id="dboardMainBottomBodyTable">
              table
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</body>

</html>