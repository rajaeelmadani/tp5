
 <?php 

//$etudiants[]= ["CodeE"=>"E1","Nom"=>"rajae","Prenom"=>"raja","Code_filiere"=>"SMI","Note"=>16,"Tel"=>061324266,"Sexe"=>"femme"];
$etudiants[]= ["wafae","wafee","SMP",16,"0687282912","femme","E1"];
$etudiants[]= ["ali","hatimi","SMP",15,"0609288945","homme","E2"];
$etudiants[]= ["momo","mini","SMA",10,"0622290267","femme","E3"];
$etudiants[]= ["kamilia","kam","SMI",11,"0610998724","femme","E4"];
$etudiants[]= ["jihane","has","SMI",9,"0629309782","femme","E5"];
$etudiants[]= ["Aimad","rrr","SMI",10,"0611229019","homme","E6"];
$etudiants[]= ["sahar","rjkk","SMI",13,"0633333480","femme","E7"];
$etudiants[]= ["sara","see","SMC",18,"06009888","femme","E8"];
$etudiants[]= ["toto","tati","SMI",18,"0682330123","homme","E9"];
$etudiants[]= ["hanae","opp","SMP",17,"0611778291","femme","E10"];
$etudiants[]= ["salma","sss","SMI",6,"0612285698","femme","E11"];
$etudiants[]= ["khalid","fff","BCG",12,"0631411234","homme","E12"];
 $filiere=$_GET["f"];

$Nombre_etudiant=count(getEtudiant($filiere));


		define("moyen",10);
function getEtudiant($filiere){
	
			$T=array();
	for ($i=0; $i < count($GLOBALS["etudiants"]);$i++) {
	if($GLOBALS["etudiants"][$i][2]==$filiere)
			$T[]= $GLOBALS["etudiants"][$i];

}
return $T;
}

function getEtudiantRéussis($filiere){
	
			$T=getEtudiant($filiere);
			for ($i=0; $i < count($T);$i++) {
			if($T[$i][3]>= moyen)
			$s[]= $T[$i];}
		return $s;

}
function getMeilleureNote($filiere){
	     
			$T=getEtudiant($filiere);
                $max=$T[0][3];
				for ($i=0; $i < count($T);$i++) {
				if ($max < $T[$i][3]) 
				$max= $T[$i][3];
	}
	return $max;

}
 $max = getMeilleureNote($filiere);
 function getMention ($note) {
	
	if ($note < 10)
		return "Ajourné!";
	elseif (10<= $note && $note < 12)
		return "Passable";
	elseif (12 <= $note && $note < 14)
		return "Assez bien";
	elseif (14 <= $note && $note < 16)
		return "Bien";
	
	elseif (16 <= $note && $note <= 20)
		return "Tres bien";
		else 
		return "erreur";		
	
	
}
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
  

 
    <style type="text/css">
	 body{
	background:#fafafa;
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


  table {

margin-left:150px;
border: 2px solid black;
  } 
 td,th {
	
	  
	  border: 2px solid black;
	text-align:center;
	width:200px;
	height:30px;
	
}

h3,h4{
	padding-left:20px;
	color:#121d63;
}
 </style>
</head>
<body>
<div id="header">

<img src="photo.png" > 
<h5>Faculté des sciences dhar el mehraz </h5>
<h4><?php 
echo date('l j F Y');



?></h4>


</div></br></br></br>
<h3>Liste des étudiants réussissent dans la filière: <?= $filiere ?></h3></br></br>

<?php
	// $T=getEtudiant($filiere);
// foreach($T as $e){
	// echo"
	// <tr>
// <td>" . $e[0] . "</td>
// <td>" . $e[1] . "</td>

// <td>" . $e[3] . "</td>
// </tr>";
// }?>


<h4>Meilleure note : <?= $max?></h4>
<h4>Nombre des étudiants de la filière <?= $filiere?>  : <?= $Nombre_etudiant?> </h4></br></br></br>


<table>
	<tr>
	    <th>CodeE</th>
		<th>Nom </th>
		<th>Prenom </th>
		<th>Note</th>
		<th>Mention</th>
	
	</tr>
	
	<?php
		$T=getEtudiantRéussis($filiere);
		
foreach($T as $e){
?>		
<tr>
<td><a href="Detail.php?CodeE=<?= $e[6] ?></br>NomE:<?= $e[0] ?></br> PrenomE:<?= $e[1] ?></br> NoteE:<?= $e[3] ?></br>Mention:<?= getMention($e[3]) ?></br> Sexe:<?= $e[5] ?></br> Telephone:<?= $e[4] ?> "><?= $e[6] ?></a></td>
<td><a href="Detail.php?CodeE=<?= $e[6]?></br>NomE:<?= $e[0] ?></br> PrenomE:<?= $e[1] ?></br> NoteE:<?= $e[3] ?></br>Mention:<?= getMention($e[3]) ?></br> Sexe:<?= $e[5] ?></br> Telephone:<?= $e[4] ?> "><?= $e[0] ?></a></td>
<td><a href="Detail.php?CodeE=<?= $e[6]?></br>NomE:<?= $e[0] ?></br> PrenomE:<?= $e[1] ?></br> NoteE:<?= $e[3] ?></br>Mention:<?= getMention($e[3]) ?></br> Sexe:<?= $e[5] ?></br> Telephone:<?= $e[4] ?>"><?= $e[1] ?></a></td>
<td><a href="Detail.php?CodeE=<?= $e[6] ?></br>NomE:<?= $e[0] ?></br> PrenomE:<?= $e[1] ?></br> NoteE:<?= $e[3] ?></br>Mention:<?= getMention($e[3]) ?></br> Sexe:<?= $e[5] ?></br> Telephone:<?= $e[4] ?>"><?= $e[3] ?></a></td>
<td><a href="Detail.php?CodeE=<?= $e[6] ?></br>NomE:<?= $e[0] ?></br> PrenomE:<?= $e[1] ?></br> NoteE:<?= $e[3] ?></br>Mention:<?= getMention($e[3]) ?></br> Sexe:<?= $e[5] ?></br> Telephone:<?= $e[4] ?>"><?=  getMention($e[3]) ?></a></td>
</tr>


<?php	
}

?>
<tr>
<td><a href="page4.php">Ajouter étudiant</a></td>
</tr>
</table>
</body>
</html>
 
 