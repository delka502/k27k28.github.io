<!DOCTYPE html>
<html>
<title>Tabungan Mahasiswa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="vendors/img/icon2.png">
<link rel="stylesheet" href="vendors/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="vendors/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

a {
  
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide" style="text-decoration: none;">TABUNGAN MAHASISWA</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    <a href="tabelNama.php" style="text-decoration: none;" class="w3-bar-item w3-button">

KELOMPOK</a>
      <a href="#about" style="text-decoration: none;" class="w3-bar-item w3-button"><i class="fa fa-quote-right" aria-hidden="true"></i>

TENTANG</a>
      <a href="admin/login.php" style="text-decoration: none;" class="w3-bar-item w3-button"><i class="fa fa-sign-in" aria-hidden="true"></i>
 MASUK</a>
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">X</a>
  <a href="tabelNama.php" style="text-decoration: none;" onclick="w3_close()" class="w3-bar-item w3-button">KELOMPOK</a>
  <a href="#about" style="text-decoration: none;" onclick="w3_close()" class="w3-bar-item w3-button">TENTANG</a>
  <a href="admin/login.php" target="_blank" style="text-decoration: none;" onclick="w3_close()" class="w3-bar-item w3-button">MASUK</a>

</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-black" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Tabungan Mahasiswa</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Tabungan Mahasiswa</span><br>
    <span class="w3-large">Web aplikasi pencatatan tabungan mahasiswa.</span>
   
  </div> 
  <!-- <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div> -->
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">TENTANG <img src="vendors/img/logo1.png"></h3>
  <p class="w3-center w3-large">Tabungan mahasiswa adalah web aplikasi yang berfungsi untuk melakukan pencatatan data tabungan para mahasiswa.  </p>
 <!--  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter"></div>
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div> -->
</div>

<!-- Promo Section - "We know design" -->


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">

  <p>Powered by <a href="tabelNama.php" title="K27.K28" target="_blank" class="w3-hover-text-green">K27.K28</a></p>
  <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kultur 27 & Kultur 28 All rights reserved</p>

</footer>

<!-- MODAL -->
    <!-- INSTAGRAMAN -->
    <div class="modal fade" id="exampleModalCenterFB" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <strong>INSTAGRAM</strong><br>
       <p><a href="https://instagram.com/elekelik22?igshid=YTY2NzY3YTc=" target="_blank">https://instagram.com/elekelik22?igshid=YTY2NzY3YTc=</a></p>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>
       
    </div>
  </div>
</div>
</div>
   
<!-- END MODAL -->

 <!-- jQuery -->
    <script src="vendors/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="vendors/js/bootstrap.min.js"></script>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>


</body>
</html>
