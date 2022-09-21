<?php

session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h3 class="lead">A more convenient way of finding your medecine</h3>
                    <?php include 'button.php' ?>
                </div>
            </div>
        </div>
    </div>
    </section>
<!--End of Hero Page-->
<!--Start of Features-->

<div class="service-features">
    <div>
      <span class="service-features-icon">
        <i class="fa-sharp fa-solid fa-magnifying-glass-location"></i
      ></span>
      <p class="service-features-title fs-4">Search Your Medicine</p>
      <p>
        Search for the medicine you are looking for.
        Type the name and locate in the map where it is available.
      </p>
    </div>
    <div>
      <span class="service-features-icon"
        ><i class="fa-sharp fa-solid fa-store"></i
      ></span>
      <p class="service-features-title fs-4">Look For Drugstore</p>
      <p>
        Easily search for the nearest and available drugstores in your area.
      </p>
    </div>
    <div>
      <span class="service-features-icon"
        ><i class="fa-solid fa-pills"></i
      ></span>
      <p class="service-features-title fs-4">Check For Availability</p>
      <p>
        Readily displays the medicines your need - right now.
      </p>
    </div>
    <div>
        <span class="service-features-icon"
          ><i class="fa-sharp fa-solid fa-handshake"></i
        ></span>
        <p class="service-features-title fs-4">Be A Partner</p>
        <p>
          Partner with us. Register and be one of the more accessible pharmacies in your area.
        </p>
      </div>
  </div>
  <!--Ends of Features-->
  <!--About US-->
  <div class="about-us-container">
    <div class="about-us-wrapper">
      <div class="about-us-text">
        <p class="lead">
          Meditrack is a Web-Application built this year 2022 aiming to help the residents of quezon city to a more accessible and more convinient way of looking for medicine.
          Meditrack is founded by three young men who experience the hectic in going in long lines in the drugstore but ended up buying nothing. This three young men brainstorm and
          eneded up making the Web-Application.
        </p>
      </div>
      <div class="about-us-image">
        <img src="images/pin.png" alt="" />
      </div>
    </div>
  </div>
  <!--End of About Us-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>