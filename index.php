<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>
    Jabalpur & Narsinghpur Tourism
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="web.img/AAN[1].png" type="image/x-icon">
  <script src="script.js" defer></script>

</head>

<body>
  <!-- Header -->
   <a href=""></a>
  <header>
    <div class="container">
      <div class="logo-container">
        <img src="AAN[1].png" alt="Jabalpur & Narsinghpur Tourism Logo" class="header-logo">
        <span class="logo-text">Jabalpur & Narsinghpur Tourism</span>
      </div>
    
      </a>
      <nav>
        <a href="#destinations">
          Destinations
        </a>
        <a href="#home">
          Home
        </a>
        <a href="#services">
          Services
        </a>
        <a href="#booking">
          Booking
        </a>
        <a href="#testimonials">
          Testimonials
        </a>
        <a href="#contact">
          Contact
        </a>
        <a href="reviews.html" class="btn">Reviews</a>
        <!-- <a href="login.html" class="btn">Login</a> -->

      </nav>
      <a class="btn" href="login.html" class="">Login</a>
      <div class="text-content" id="text">
      </div>
    </div>
    <a href="logout.php" class="btn">Logout</a>
    <div class="text-content" id ="text">
</div>
<a href="/project/register.php" class="btn">sigup</a>
    <div class="text-content" id ="text">
  </header>
  <!-- Hero Section -->

  <section id="home">
    <img alt="A beautiful scenic view of mountains and a lake"
      src="https://storage.googleapis.com/a1aa/image/l1nd-SOII9FOiqtJPj43_bpxN73ZFoVPtvCo8sjl-F0.jpg" />

    <div class="overlay">
      <h1>
        Explore the Jabalpur & Narsinghpur Tourism
      </h1>
      <p>
        Discover new places with us
      </p>
      <a class="btn" href="discription.html">
        Get Started </a>
    </div>
  </section>
  <!-- Destinations Section -->
  <section id="destinations">
    <div class="container">
      <h2>
        Popular Destinations
        <br>
        <a href="destinations.html" class="btn">go now</a>

      </h2>
      <div class="destinations-grid">
        <div class="destination-card">
          <img src="dada maharaj.jpg" alt="Dada Maharaj Mandir Temple">
          <div class="destination-overlay">
            Dada Maharaj Mandir Temple
          </div>
        </div>
        <div class="destination-card">
          <img src="jhoteswar mandir.jpg" alt="Jhoteswar Temple">
          
          <div class="destination-overlay">
            Jhoteswar Temple
          </div>
        </div>
        <!-- <div class="destination-card">
          <img src="web.img/narsingh mandir.jpg" alt="Narsigh Mandir Temple">
          <div class="destination-overlay">
            Narsigh Mandir Temple
          </div>
        </div> -->
        <!-- <div class="destination-card">
          <img src="web.img/ram mandir .jpg" alt="Ram Mandir Temple">
          <div class="destination-overlay">
            Ram Mandir Temple
          </div>
        </div> -->
        <div class="destination-card">
          <img src="ganesh mandir.jpg" alt="Ganesh mandir temple">
          <img src="ganesh mandir.jpg" alt="Ganesh mandir temple">
          <div class="destination-overlay">
            Ganesh mandir temple
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section -->
  <section id="services">
    <div class="container">
      <h2>
        Our Services
      </h2>
      <div class="services-grid">
        <div class="service-card">
          <i class="fas fa-plane-departure"></i>
          <h3>
            Flight Booking
          </h3>

          <a class="btn" href="https://www.in.cheapflights.com/">learn more</a>

          <p>
            Book flights to your favorite destinations with ease.
          </p>
        </div>
        <div class="service-card">
          <i class="fas fa-hotel"></i>
          <h3>
            Hotel Booking
          </h3>
          <a class="btn" href="https://www.tripadvisor.in/">learn more</a>
          <p>
            Find and book the best hotels at your destination.
          </p>
        </div>
        <div class="service-card">
          <i class="fas fa-car"></i>
          <h3>
            Car Rentals
          </h3>
          <a class="btn" href="https://evsmartcab.com/">learn more</a>
          <p>
            Rent cars for your travel needs at affordable prices.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Booking Section -->
  <!-- Testimonials Section -->

  <section id="testimonials">
    <div class="container">
      <h2>
        What Our Clients Say
      </h2>
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <img alt="Portrait of a happy client"
            src="https://storage.googleapis.com/a1aa/image/Kz21upGtU-VLldPOfz2j4xZwC-CtqPtdARiyHuMxRSY.jpg" />
          <p>
            "Amazing experience! The best travel agency I've ever used."
          </p>
          <h3>
            John_Doe670@gmail.com
          </h3>
        </div>
        <div class="testimonial-card">
          <img alt="Portrait of a satisfied client"
            src="https://storage.googleapis.com/a1aa/image/NgJ_UnMh21pV1QezeClFRHbS8bgxFJWQf5BRF1RJQiY.jpg" />
          <p>
            "Highly recommend! They made my trip unforgettable."
          </p>
          <h3>
            Jane_Smith204@gmail.com
          </h3>
        </div>
        <div class="testimonial-card">
          <img alt="Portrait of a delighted client"
            src="https://storage.googleapis.com/a1aa/image/vGX8w-u1nrEQD4xwKojhah_Tqz35ohQVSS7xoIYBywA.jpg" />
          <p>
            "Excellent service and great attention to detail."
          </p>
          <h3>
            Emily_Johnson202@gmail.com
          </h3>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <section id="contact">
  </section>
  <!-- Google Map Embed -->
  <div>
    <section class="py-10 bg-white">
      <h2>Our Locations</h2>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.908321885321!2d79.1855150149818!3d22.31216338531233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3982281cbf5cbcb3%3A0x24d2bd41d92ddbd3!2sNarsinghpur%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1644505625890!5m2!1sen!2sin"
          allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!-- Footer -->
      <footer>
        <div class="container">
          <p>
            © 2025 Tourism. All rights reserved.
          </p>
          <div class="social-links">
            <a href="#">
              <i class="fab fa-facebook-f">
              </i>
            </a>
            <a href="#">
              <i class="fab fa-twitter">
              </i>
            </a>
            <a href="#">
              <i class="fab fa-instagram">
              </i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in">
              </i>
            </a><!--  -->
          </div>
        </div>
      </footer>
      
</body>

</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST['submit'])
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  

 $query = "INSERT INTO gettouch(name,email,message) VALUES('$name','$email','$message')";
 $data = mysqli_query($conn,$query);
 if($data){
  echo "<script>alert('Data submitted success');</script>";
 }
 else
 {
  echo "not insert data";
 }
}
?>