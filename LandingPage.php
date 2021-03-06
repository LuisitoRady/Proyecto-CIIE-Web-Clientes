<html>
<title>Congreso de Innovación Educativa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="LandingPage.css">
<body>

<!-- Navbar-->
<div class='w3-top'>
  <ul class='w3-navbar w3-red w3-card-2 w3-left-align w3-large'>
    <li class='w3-hide-medium w3-hide-large w3-opennav w3-right'>
      <a class='w3-padding-large w3-hover-white w3-large w3-red'></a>
    </li>
    <li><a href='#' class='w3-padding-large w3-white'>Landing Page</a></li>
  </ul>

<!--Navbar on small screens-->
  <div id='navDemo' class='w3-hide w3-hide-large w3-hide-medium'>
      <li><a class='w3-padding-large page-scroll' href='#'>Landing Page</a></li>
    </ul>
  </div>
</div>

<!-- Header -->
<header class='w3-container w3-red w3-center w3-padding-128'>
  <h1 class='w3-margin w3-jumbo'>3ER. Congreso Internacional de Innovación Educativa</h1>
  <p class='w3-xlarge'>Coming Soon</p>
  <a href='Login.php' class='w3-btn w3-padding-16 w3-large w3-margin-top w3-hover-blue'>Login to your account</a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container" id="descripcion">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Descripcion de evento</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third w3-center">
      <img src="imagenes/logo.jpg">
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" id="contenido">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img src="imagenes/logo.jpg">
    </div>

    <div class="w3-twothird">
      <h1>Contenido</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!--Google Map-->
<section>
	<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.6147681452776!2d-100.29181838507837!3d25.650908083687224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bfb8e720417b%3A0x3ad704d67f71158d!2sLearning+Commons!5e0!3m2!1sen!2smx!4v1471917762883" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>

<!--Quote-->
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <i class="w3-margin w3-xlarge">Quote del congreso</i>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-8 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
   <a href="#" class="w3-hover-text-indigo w3-padding-right"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-light-blue w3-padding-right"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-indigo w3-padding-right"><i class="fa fa-linkedin"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-google"></i></a>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</body>
</html>
