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
      <a href="index.php" style="text-decoration: none;" class="w3-bar-item w3-button"><i class="fa fa-quote-right" aria-hidden="true"></i>

HOME</a>
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
  <a href="index.php" style="text-decoration: none;" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="admin/login.php" target="_blank" style="text-decoration: none;" onclick="w3_close()" class="w3-bar-item w3-button">MASUK</a>

</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-black position-absolute top-50 start-50 translate-middle" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">KULTUR 27 & 28</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">KULTUR 27 & 28</span><br>
    <span class="w3-large">Dibawah ini adalah tabel nama anggota kultur 27 & 28 beserta kakak kultur.</span>
   
  </div> 
   
</header>
<div>
<table class="table table-bordered">
   <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Kultur 27<br></th>
      <th scope="col">Kultur 28</th>
    </tr>
  </thead>
  <tbody>
      <th scope="row">1</th>
      <td>Quincy Kania Runtu</td>
      <td>Bella Areros</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Vikriyanto isra</td>
      <td>Tasya Lumowa</td>
    </tr>
    <tr class="table-active">
      <td colspan="3" class="text-center" ><b>ELEK</b></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Brayen Paembonan</td>
      <td>Arya item</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Clark Metthew Rotinsulu </td>
      <td>Charlos Prabowo Imanuel Sitanggang</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dafa Khairu Fadillah Wantasen </td>
      <td>Chevin Alffons Tangkelabi</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Dominikus Christian Delon Ruaw</td>
      <td>Daniel Nicholas Stefanus Lantang</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Galnoel Peter Rindengan</td>
      <td>Delon Dynes Jutan</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Kenneth Benedict Lienso Laorens</td>
      <td>Kriskerry William Tooy</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Rafael Aditya Dani Saputra</td>
      <td>Steve Mickhael Eka Putra Wuaten</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Tyrone Gilchrist Paat</td>
      <td>Xaverius Ricky Manorek</td>
    </tr>
    <tr class="table-active">
      <td colspan="3" class="text-center" ><b>ELIK</b></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Felaria Jetty Tamedia</td>
      <td>Herni Herawati Elisabeth Abraham</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Veronica Waeo</td>
      <td>Jofinka Palinggi</td>
    </tr>
  </tbody>
</table>
  </div> 
    </div>
<div>

</div>

<!-- Promo Section - "We know design" -->


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kultur 27 & 28 All rights reserved</p>

</footer>

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
