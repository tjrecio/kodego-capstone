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
    <!--Starts NavBar-->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #253da1;">
        <div class="container-fluid">
            <a class="navbar-brand px-5" href="#">MediTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav px-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--NavBar Ends Here-->
    <!--Hero Page-->
    
    <section class="hero sp-2" id="about">
        <div class="hero-area">
        <div class="container p-5">
            <div class="row align-items-center justify-content-between text-center">

                <div class="content">
                    <h2>Welcome To Meditrack</h2>
                    <h3 class="lead">A more convinient way of finding your medecine</h3>
                    <?php include 'header.php' ?>
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
        Type the brand and look in the map where is it available.
      </p>
    </div>
    <div>
      <span class="service-features-icon"
        ><i class="fa-sharp fa-solid fa-store"></i
      ></span>
      <p class="service-features-title fs-4">Look For Drugstore</p>
      <p>
        Look and search for the nearest and available Drugstore in your area.
      </p>
    </div>
    <div>
      <span class="service-features-icon"
        ><i class="fa-solid fa-pills"></i
      ></span>
      <p class="service-features-title fs-4">Check For Availability</p>
      <p>
        Look if the medicine you are looking for is availble and has stock in the Drugstore.
      </p>
    </div>
    <div>
        <span class="service-features-icon"
          ><i class="fa-sharp fa-solid fa-handshake"></i
        ></span>
        <p class="service-features-title fs-4">Become A Partner</p>
        <p>
          Become a partner with us, regiser and become one of the more accecible Drugstore in your area.
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
        <img src="images/bg2.jpg" alt="" />
      </div>
    </div>
  </div>
  <!--End of About Us-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>