<!DOCTYPE html>
<html>
<title>Asociația de locatari - Donath XI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Donath XI</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="index.php" class="w3-bar-item w3-button">Acasă</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Access informații <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-show w3-padding-large w3-medium">
      <a href="citire.php" class="w3-bar-item w3-button">Citire apometre</a>
      <a href="avizier.php" class="w3-bar-item w3-button">Avizier</a>
      <a href="noutati.php" class="w3-bar-item w3-button">Noutăți</a>
    </div>
    <a href="sugestii.php" class="w3-bar-item w3-button">Sugestii</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Donath XI</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Avizier</p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="imagini/avizier.jpg" alt="apometre" style="width:50%">
  </div>

  <div class="w3-container w3-text-grey">
  <h2>Curățenie lunară</h2>
    <p>În data de 18 mai se va efectua o operațiune de curățenie în jurul blocului. Rugăm toate persoanele care pot ajuta să fie prezente la ora 18 în fața scării D.</p>
  </div>

  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Întrebări?</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Nume" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subiect" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Mesaj" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Trimite</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>Despre</h4>
        <p><a href="index.php">Despre noi</a></p>
        <p><a href="citire.php">Citire apometre</a></p>
        <p><a href="avizier.php">Avizier</a></p>
        <p><a href="noutati.php">Noutăți</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Donath XI</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Donath XI, Cluj Napoca</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> admin@donathxi.ro</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Realizat de către <a href="http://www.rafael.ro" title="rafael.ro" target="_blank" class="w3-hover-opacity">rafael.ro</a></div>

  <!-- End page content -->
</div>


<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}



// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
