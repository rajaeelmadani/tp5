 
<?php
session_start();
if (!isset($_SESSION["login"])) { include("Autentification.php"); }
?>  
 
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
 <style type="text/css">
 p{
	 font-weight:bold ;
	 padding:20px;
 }
 a{
	 color:#264c80;
	 padding:40px;
	 font-weight:bold ;
 }
	 body{
	 
margin:0px;

	 }
#header{
 margin-top:30px; 
 
background:#264c80;
height:35px;
}
 #header h5{
  font-weight:bold ;
  margin-top:-40px; 
  margin-left:350px;  
   color:white;
 }
 #header h4{
   margin-top:-27px; 
 margin-left:1130px;
 color:white;
 } 
 img{
  width:90px;  
  height:80px;  
     margin-top:-30px; 
   margin-left:200px; 
  }
 
</style>
</head>
<body style="color: <?= $couleurText ?>; background: <?= $couleurPlan ?>">

<div id="header">

<img src="photo.png" > 
<h5>Faculté des sciences dhar el mehraz </h5>
<h4><?= date('l j F Y')?></h4> 
</div></br></br></br>
  <p style="color:red;">Vous etes connecté en tant que:   <?=$_SESSION["login"] ?></p>    
<p>Cliquer sur une filière pour voir les résultats</p></br>
<?php
$couleurText= isset($_COOKIE["couleurText"])? $_COOKIE["couleurText"]: "black";
$couleurPlan= isset($_COOKIE["couleurPlan"])? $_COOKIE["couleurPlan"]: "#fafafa";

$filiere[]= ["Code_filiere"=>"SMI","Intitule"=>"1.Science mathematique et informatique"];
$filiere[]= ["Code_filiere"=>"SMP","Intitule"=>"2.Science mathematique et physique"];
$filiere[]= ["Code_filiere"=>"SMC","Intitule"=>"3.Science mathematique et chimie"];
$filiere[]= ["Code_filiere"=>"SMA","Intitule"=>"4.Science mathematique et application"];

foreach($filiere as $fi){
	
	?>

<ul><a href="ListeEtudiants.php?f=<?= $fi["Code_filiere"] ?>"><?= $fi["Intitule"] ?></a></br></br></ul>
<?php
 }
?>
  <td> 
<a href = "Deconnexion.php" class="btn btn-primary" >Déconnexion</a>
<a href="options.php" class="btn btn-primary">Options</a>
</td>
</body>
</html>