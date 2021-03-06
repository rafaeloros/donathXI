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
   </div>
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
    <p class="w3-left">Administrare</p>
  </header>

  <div class="w3-container w3-text-grey">
<?php
		include("conn.php");

		function testare($data) {
   $data = trim($data); 
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data; 
}


class Admin {
   public $id_admin;
   public $nume;
   public $parola;
}

$n = testare($_REQUEST["numeadmin"]);
$p = testare($_REQUEST["parola"]);
if(isset($cnx)) {
   $cda= "SELECT * from admin";
   $stmt = $cnx->prepare($cda);
   $stmt->execute();//trimite spre server comanda SELECT, prin aplelul metodei execute
   $gasit = false;
   while ($utilizator = $stmt->fetchObject('Admin')) {
   	if($utilizator->nume == $n && $utilizator->parola == $p) {
                 echo '<h1>Sunteți autorizat</h1>';
                 echo '<br>';
                 echo '<h2><a href="date_contoare.php" target="_new">Date contoare înregistrate</a></h2>';
                 echo '<br>';
                 echo '<h2><a href="date_mesaje.php" target="_new">Sugestii / Reclamații primite</a></h2>';
                 echo '<br>';
         $gasit = true;
         break;
      }
   }
   if(!$gasit) {
   	echo '<h1> Parola este greșită sau nu aveți acces în baza de date</h1><br />';
   	echo '<form><input type="button" value="Mai încearca" onClick="location.href=\'admin.php\'"></form></center>';
   }
   $cnx = null;
}
?>
<p/>
  </div>


  <div class="w3-black w3-center w3-padding-24">Realizat de către <a href="http://www.rafael.ro" title="rafael.ro" target="_blank" class="w3-hover-opacity">rafael.ro</a></div>

  <!-- End page content -->
</div>



</body>
</html>
