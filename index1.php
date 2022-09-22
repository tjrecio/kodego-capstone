<?php

session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">

  <title>MediTrack</title>
</head>

<body>
  <!--Hero Page-->
  <section class="hero sp-2" id="about">
    <div class="hero-area">
      <div class="container p-5">
        <div class="row align-items-center justify-content-between text-center">

          <div class="content">
            <h2>Welcome To Meditrack</h2>
            <h3 class="lead">A more convenient way of finding your medicines</h3>
            <?php include 'button.php' ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Hero Page-->
  <!--Start of Features-->

  <!--Srart of Cards-->
  <section style="background-color:#226a99;">
    <div class="container">
      <div class="row">
        <div class="col-md-3 p-2">
          <div class="card text-dark">
            <div class="card-body  text-center">
              <h4 class="card-title mb-3">Search Your Medicine</h4>
              <span class="service-features-icon">
                <i class="fa-sharp fa-solid fa-magnifying-glass-location"></i></span>

              <p class="card-text">
                Search for the medicine you are looking for.
                Type the drug's generic name and pin-point where available.
            </div>
          </div>
        </div>
        <div class="col-md-3 p-2">
          <div class="card  text-dark">
            <div class="card-body  text-center">
              <h4 class="card-title mb-3"> Look For Drugstore </h4>
              <span class="service-features-icon">
                <i class="fa-solid fa-store"></i></span>
              <p class="card-text">
                Easily search for the nearest and available drugstores in your area.
            </div>
          </div>
        </div>
        <div class="col-md-3 p-2">
          <div class="card  text-dark">
            <div class="card-body  text-center">
              <h4 class="card-title mb-3"> Check For Availability</h4>
              <span class="service-features-icon">
                <i class="fa-solid fa-pills"></i></span>

              <p class="card-text">
                Realtime drug availability from your nearest drugstores.
            </div>
          </div>
        </div>
        <div class="col-md-3 p-2">
          <div class="card text-dark">
            <div class="card-body  text-center">
              <h4 class="card-title mb-3">Be A Partner </h4>
              <span class="service-features-icon">
                <i class="fa-solid fa-handshake"></i></span>

              <p class="card-text">
                Register and be one of the more accessible pharmacies in your area.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Ends of Cards-->
  <!--Start of Register Area-->
  <div class="registration">
    <h2 style="font-size: 50px;"> Be A Partner!</h2>
    <p>Customers leaving your store empty-handed? Ever wished you had the option to tell them what you have instead? Benefit from increased customer satisfaction and conversion rates - all for free.</p>
    <?php include 'registerbutton.php' ?>
  </div>
  <!--About US-->
  <section style="background-color:#226a99;">
    <div class="about-us-wrapper pb-5">
      <div class="about-us-text">
        <h4 class="title pt-4"> Free. Online. Realtime. </h4>
        <p>
          Meditrack is a Web-Application built this year 2022 with the goal of providing the residents
          of Quezon City with a more accessible and more convenient way of looking for medicines.
          Meditrack is founded by three young men who experience the hassle of wasted time and long
          lines in the drugstore but ended up buying nothing. This three young men brainstormed
          and ended up making the web-application.
        </p>
      </div>
      <div class="about-us-image pt-4">
        <img src="images/pin.png" alt="" />
      </div>
    </div>
  </section>
  <!--End of About Us-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>