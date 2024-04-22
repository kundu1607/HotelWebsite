<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Document </title>
  <link rel="icon" href="bootstrap/favicon.png">

  <!-- Include SweetAlert CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <!-- Include SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

  <link rel="stylesheet" href="sumit.css">

</head>

<body>
  <!--------------------navbar section----------------- -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="bootstrap/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#room-heading">room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service-heading">service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#staff">team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#price">price</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#form"><button type="button" class="btn btn-outline-danger">book now</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- ---------------------2nd section ------------------------>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/slider/slider1.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>WELCOME TO HOTEL IN DUBAI</h1>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ad accusantium obcaecati laborum qui,
            accusamus a? Sint, ea ratione doloremque suscipit magnam iusto ad mollitia sequi ullam maiores sed aperiam!
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/slider/slider2.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>WELCOME TO HOTEL IN DUBAI</h1>
          <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium eveniet tempore nihil eos. Corrupti
            odit soluta architecto deserunt et at veniam, laudantium voluptatum illo similique, distinctio magnam ea
            qui! Ratione.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!--------------------------  3rd section ------------------------>
  <div class="container">
    <div id="text">
      <h1> Welcome to hotel the haven of your weekend</h1>
      <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum ipsa ex illum eum. Maximefacere numquam hic
        placeat, consequuntur minima voluptas? Mollitia ad incidunt a, sint architecto commodi maiores autem repellat
        non labore delectus quos, nihil ut! Error voluptatum deleniti libero recusandae animi. <br> <br>Lorem ipsum
        dolor sit Cum rerum corporis laboriosam ex rem minima atque repellendus cupiditate! Repudiandae quibusdam
        sapiente nostrum perspiciatis odio doloremque libero earum molestiae modi repellendus.</p>

      <a class="nav-link" href="#blog"><button type="button" class="btn btn-outline-danger">explore</button></a>
    </div>
    <div id="image">
      <img src="image/about-img.svg" alt="">
    </div>
  </div>


  <!--------------------------  4th section ------------------------>
  <div id="room-heading">
    <p> what can do for you </p>
    <h1> our favorite rooms</h1>
  </div>
  <div class="card-group">
    <div class="card">
      <img src="image/room/room1.webp" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="image/room/room2.webp" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="image/room/room3.webp" class="card-img-top" alt="...">
    </div>
  </div>



  <!--------------------------  5th section ------------------------>
  <div id="service-heading">
    <p> what can do for you </p>
    <h1> our favorite service</h1>
  </div>
  <div class="service">
    <div class="service1">
      <img src="image/services/service1.webp" alt="">
    </div>
    <div class="service2">
      <div class="sub-service">
        <div class="img-icon">
          <img class="center-icon" src="image/services/service-icon1.webp" alt="">
        </div>
        <div>
          <h2> spa beauty & health</h2>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nulla dolorem ad amet eaque? Iste modi
            ipsa nemo quas quia. </p>
        </div>
      </div>
      <div class="sub-service">
        <div class="img-icon">
          <img class="center-icon" src="image/services/service-icon2.webp" alt="">
        </div>
        <div>
          <h2> Restaurant </h2>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nulla dolorem ad amet eaque? Iste modi
            ipsa nemo quas quia. </p>
        </div>
      </div>
      <div class="sub-service">
        <div class="img-icon">
          <img class="center-icon" src="image/services/service-icon3.webp" alt="">
        </div>
        <div>
          <h2> Swimming Pool</h2>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nulla dolorem ad amet eaque? Iste modi
            ipsa nemo quas quia. </p>
        </div>
      </div>
      <div class="sub-service">
        <div class="img-icon">
          <img class="center-icon" src="image/services/service-icon4.webp" alt="">
        </div>
        <div>
          <h2> Conference Hall</h2>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nulla dolorem ad amet eaque? Iste modi
            ipsa nemo quas quia. </p>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------------------  6th section ----------------------  -->

  <div id="background">
    <div class="number-text">
      <h1> 1287+ </h1>
      <p> happy clients</p>
    </div>
    <div class="number-text">
      <h1>3139+</h1>
      <p> new friendship</p>
    </div>
    <div class="number-text">
      <h1>1440+</h1>
      <p> five start rotings</p>
    </div>
    <div class="number-text">
      <h1>3036+</h1>
      <p> served breakfast</p>
    </div>
  </div>


  <!-- ------------------------  7th section ----------------------  -->
  <div id="staff">
    <p> what can do for you </p>
    <h1> our spacel staff</h1>
  </div>
  <div class="card-group">
    <div class="card">
      <img src="image/team/team1.webp" alt="">
      <div class="card-title">
        <h5> shirley gibson</h5>
        <p> manoger</p>
      </div>
    </div>
    <div class="card">
      <img src="image/team/team2.webp" alt="">
      <div class="card-title">
        <h5> Ronald long </h5>
        <p> chil reciption officer</p>
      </div>
    </div>
    <div class="card">
      <img src="image/team/team3.webp" alt="">
      <div class="card-title">
        <h5> Ashley sanchez </h5>
        <p> mastar chef</p>
      </div>
    </div>
    <div class="card">
      <img src="image/team/team4.webp" alt="">
      <div class="card-title">
        <h5> jessica watson </h5>
        <p> housekeeping</p>
      </div>
    </div>
  </div>


  <!-- ------------------------  8th section ----------------------  -->
  <div id="gallery">
    <p> what can do for you </p>
    <h1> our gallery</h1>
  </div>
  <div class="card-group">
    <div class="card">
      <img src="image/gallery/1.webp" alt="">
    </div>
    <div class="card">
      <img src="image/gallery/2.webp" alt="">
    </div>
    <div class="card">
      <img src="image/gallery/3.webp" alt="">
    </div>
    <div class="card">
      <img src="image/gallery/4.webp" alt="">
    </div>
  </div>
  <div class="card-group">
    <div class="card">
      <img src="image/gallery/5.webp" alt="">
    </div>
    <div class="card">
      <img src="image/gallery/6.webp" alt="">
    </div>
  </div>


  <!-- ------------------------  9th section ----------------------  -->
  <div id="price">
    <p> what can do for you </p>
    <h1> our pricing </h1>
  </div>
  <div class="container">
    <div class="card m-3" style="width: 18rem; ;">
      <div class="card-body">
        <h2> Economic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt, saepesit quibusdam quisquam
          vel.</p>
        <hr>
        <h3> $150 <span>New</span></h3>
        <button class="btn  button">sign up</button>
      </div>
    </div>
    <div class="card m-3" style="width: 18rem; ;">
      <div class="card-body">
        <h2> Economic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt, saepesit quibusdam quisquam
          vel.</p>
        <hr>
        <h3> $150 <span>New</span></h3>
        <button class="btn  button">sign up</button>
      </div>
    </div>
    <div class="card m-3" style="width: 18rem;">
      <div class="card-body">
        <h2> Economic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt, saepesit quibusdam quisquam
          vel.</p>
        <hr>
        <h3> $150 <span>New</span></h3>
        <button class="btn  button">sign up</button>
      </div>
    </div>
    <div class="card m-3" style="width: 18rem;">
      <div class="card-body">
        <h2> Economic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt, saepesit quibusdam quisquam
          vel.</p>
        <hr>
        <h3> $150 <span>New</span></h3>
        <button class="btn  button">sign up</button>
      </div>
    </div>
  </div>


  <!-- ------------------------  10th section ----------------------  -->
  <div id="blog">
    <p> what can do for you </p>
    <h1> our blog </h1>
  </div>
  <div class="card-group">
    <div class="card m-3">
      <img src="image/blog/blog1.webp" alt="">
    </div>
    <div class="card m-3">
      <img src="image/blog/blog2.webp" alt="">
    </div>
  </div>


  <!-- ------------------------  11th section ----------------------  -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>

    </div>
    <div class="container">
      <div class="carousel-item active footer-logo">
        <img src="image/partners/brand1.webp" class="d-block  footer-img" alt="...">
        <img src="image/partners/brand2.webp" class="d-block  footer-img" alt="...">
        <img src="image/partners/brand3.webp" class="d-block  footer-img" alt="...">
        <img src="image/partners/brand4.webp" class="d-block  footer-img" alt="...">
        <img src="image/partners/brand5.webp" class="d-block  footer-img" alt="...">
        <img src="image/partners/brand6.webp" class="d-block  footer-img" alt="...">


      </div>
      <div class="carousel-item">
        <img src="" class="d-block ">

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




  <!----------------------------------------12th section   -------------------------------->

  <div id="form">
    <form method="post" action="">
      <table>
        <tr>
          <td> Name </td>
          <td> <input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <td> phone number </td>
          <td> <input type="text" name="number" id="number"></td>
        </tr>
        <tr>
          <td> select id proof </td>
          <td>
            <select name="select" id="select">
              <option value="select" auto>Select</option>
              <option value="Aadhar card"> Aadhar card</option>
              <option value="Pan card"> Pan card</option>
              <option value="voter card"> voter card</option>
              <option value="Driving licence"> Driving licence</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Enter proof id number </td>
          <td> <input type="text" name="idproof" id="idproof"></td>
        </tr>
        <tr>
          <td> email </td>
          <td> <input type="text" name="email" id="email"></td>
        </tr>
        <tr>
          <td> book date </td>
          <td> <input type="date" name="bookdate" id="bookdate"></td>
        </tr>
        <tr>
          <td> Days of booking </td>
          <td> <input type="number" name="daysofbooking" id="daysofbooking" min="1" value="1"></td>
        </tr>
        <tr>
          <td colspan="2"> <button type="submit" id="btn"> Book room</button> </td>
        </tr>
      </table>
    </form>
  </div>


  <?php

  include 'dbconn.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST["name"];
    echo "<script>
            Swal.fire({
                title: 'Success!',
                text: ' congratulations . $name . Your room Book successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
          </script>";

    $phonenumber = $_POST["number"];
    $selectid = $_POST["select"];
    $idnumber = $_POST["idproof"];
    $email = $_POST["email"];
    $bookdate = $_POST["bookdate"];
    $daysofbooking = $_POST["daysofbooking"];

    $sql = "INSERT INTO rooms (Name,Phone_Number,Select_id_Proof ,Enter_Proof_Number,Email ,Book_Date,Days_of_Booking)
    VALUES('$name' , '$phonenumber' , '$selectid' , '$idnumber' ,'$email','$bookdate','$daysofbooking')";

    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


  }
  ?>

</body>



</html>