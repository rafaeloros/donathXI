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
    <p class="w3-left">Date contoare</p>
  </header>

  <div class="w3-container">
<?php
include("conn.php");
 
 class contoare {
   public $nume;
   public $scara;
   public $apartament;
   public $baie;
   public $bucatarie;
}
   
   if(isset($cnx)) {
      $cda = "SELECT * FROM apa ORDER BY id_citire DESC";
      $stmt = $cnx->prepare($cda);
    $stmt->execute();
      echo "<table style=\"width:100%; \">";
      $i=1; //  Contor de linii
      while ($contor = $stmt->fetchObject('contoare')) {
         if ($i%2==0) {
            echo "<tr style=\"background-color:#cccccc; \"><td>";
         }
         else {
            echo "<tr style=\"background-color:#a0a0a0; \"><td>";
        }
        echo $contor->nume; echo "</td><td>";
        echo $contor->scara; echo "</td><td>";
        echo $contor->apartament; echo "</td><td>";
        echo $contor->baie; echo "</td><td>";
        echo $contor->bucatarie; echo "</td></tr>";
        echo "<tr><td> </td></tr>";
        $i++;
   }
   $cnx = null;
   }
?>
<br>  </div>

</div>



</body>
</html>
