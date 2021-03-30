<!-- Header Start -->


<nav class="navbar navbar-expand-lg">

<!-- <div class="container"> -->
  <a class="navbar-brand logo logo_img" href="/">
  <img src="img/logo.png" alt="Py Cube Asset Management"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <!-- <a href="/" class="navbar-logo logo">
  <img src="img/logo.png" alt="Py Cube Asset Management"/>
      </a> -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-links ml-auto">
        <li class="nav-item dropdown navbar-dropdown">
          <a href="solutions.php" class="nav_text">Solutions</a>
          <div class="dropdown">
          <a class="dropdown-item" href="biomedical-management.php">For Biomed</a>
        <a class="dropdown-item" href="facilities-management.php">For Facilities </a>
        <a class="dropdown-item" href="covid-19-logistics-support.php">For Supply Chain </a>
          </div>
        </li>

        <li class="nav-item dropdown navbar-dropdown">
          <a href="Products.php" class="nav_text">Products</a>
          <div class="dropdown">
          <a class="dropdown-item" href="aktivu.php"> <span class="text-initial">aktivu™</span></a>
        <a class="dropdown-item" href="syncsens.php"><span class="text-initial">SyncSens™</span></a>
          </div>
        </li>

        <li class="nav-item dropdown navbar-dropdown">
          <a href="Library.php" class="nav_text">Library</a>
          <div class="dropdown">
          <a class="dropdown-item" href="case-studies.php">Case Studies</a>
        <a class="dropdown-item" href="white-papers.php">White Papers</a>
        <a class="dropdown-item" href="videos.php">Videos</a>
        <a class="dropdown-item" href="blog.php">Blog</a>
          </div>
        </li>

        <li class=" nav-item dropdown navbar-dropdown">
          <a href="about-us.php" class="nav_text">About Us</a>
          <div class="dropdown">
          <a class="dropdown-item" href="who-we-are.php">Who we are</a>
        <a class="dropdown-item" href="partners.php">Partners</a>
        <a class="dropdown-item" href="our-clients.php">Our Clients</a>
        <a class="dropdown-item" href="events.php">Events</a>
        <a class="dropdown-item" href="webinar.php">Webinars</a>
          </div>
        </li>

        <li class="nav-item dropdown navbar-dropdown">
          <a href="contact.php" class="nav_text">Contact Us</a>
          <!-- <div class="dropdown">
            <a href="#">Paneer Chill Dry</a>
            <a href="#">Paneer Garlic</a>
            <a href="#">Veg Garlic</a>
            <a href="#">Veg Chilli</a>
          </div> -->
        </li>

        <li class="nav-item dropdown navbar-dropdown">
          <a  href="tel:1-800-866-8583" class="nav_tel_number nav_text">  1-800-866-8583  </a>
          <!-- <div class="dropdown">
            <a href="#">Paneer Chill Dry</a>
            <a href="#">Paneer Garlic</a>
            <a href="#">Veg Garlic</a>
            <a href="#">Veg Chilli</a>
          </div> -->
        </li>
      </ul>
    </div>

<!-- </div> -->

    </nav>
    




<!-- Header End -->

<style>
.nav_tel_number{
    background-color: #ff8400 !important;
    border-radius: 10px;
    text-align: center;
    color: black;
    padding: 5px 10px !important;
}

.nav_tel_number:after{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    width: 0%;
    content: '.';
    color: transparent;
    background: none !important;
    height: 3px;
}


.logo_img{
  width: auto !important;
}

.nav_text{
  font-family: 'Montserrat';
    font-weight: 400 !important;
    color: black !important;
    font-size: 16px;
}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.9);
  z-index: -1;
  opacity: 0;
  transition: 1s all;
}

.navbar {
  display: flex;
  align-items: center;
  width: 100vw;
  background-color: #fff;
  box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
  position: relative;
  padding: 20px 100px;
  /* padding: 0px 70px; */
  background-color: #fff;
}

/* .navbar-logo {
  color: #ff3f34;
  text-decoration: none;
  font-size: 25px;
  padding: 0px 20px;
} */

.navbar-links {
  list-style-type: none;
  display: flex;
}


.navbar-links li a {

  display: block;
  text-decoration: none;
  color: #444;
  /* padding: 0px 0px; */
  margin: 0px 20px;
  /* font-weight: 700; */
  /* transition: 5.5s all; */
}

.dropdown-item:focus, .dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
    width: auto !important;
}

.navbar-links li.navbar-dropdown {
  position: relative;
}

.navbar-links li.navbar-dropdown:hover .dropdown {
  visibility: visible;
  opacity: 1;
  transform: translateY(0px);
}

.navbar-links li.navbar-dropdown .dropdown {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding: 20px 0;
  top: 100%;
  transform: translateY(50px);
  left: 0;
  width: 250px;
  background-color: #fff;
  box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  z-index: 111;
  transition: 0.4s all;
}
.navbar-links li.navbar-dropdown .dropdown a {
  padding-top: 10px;
  padding-bottom: 10px;
  font-weight: 400;
}
.navbar-dropdown .dropdown a:hover {
  /* padding-left: 30px; */
}
.navbar-links li a:hover {
  color: #ff3f34;
}

.header {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 90vh;
  /* background-color: #f00; */
  background-image: url("http://lorempixel.com/1366/698/food/");
  background-size: cover;
}

.header-inner {
  text-align: center;
  color: #ff3f34;
  text-shadow: 0px 10px 10px rgba(0, 0, 0, .8);
}

.header-inner h1 {
  font-family: "Great Vibes", cursive;
  font-size: 130px;
}

.header-inner form input[type="search"] {
  position: relative;
  width: 500px;
  border: none;
  padding: 15px;
  border-radius: 27px;
  box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.3);
  z-index: 11;
}
.header-inner form input[type="search"]:focus {
  outline: none;
}

.header-inner form input[type="search"]:focus + div {
  z-index: 1;
  opacity: 1;
}

::placeholder {
  color: #666;
  font-weight: 400;
}
    </style>