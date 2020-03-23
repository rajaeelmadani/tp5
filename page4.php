<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
<style type="text/css">
h2{
	text-align:center;
	color:#8f72cc;
}
#div1{
padding:100px;	  
  background: #ebe6e6; 
   padding-left:400px;
	}
.form-control{
	width:500px;
}
</style>
</head>
<body>
<?php 
$filiere[]= ["Code_filiere"=>"SMI","Intitule"=>"1.Science mathematique et informatique"];
$filiere[]= ["Code_filiere"=>"SMP","Intitule"=>"2.Science mathematique et physique"];
$filiere[]= ["Code_filiere"=>"SMC","Intitule"=>"3.Science mathematique et chimie"];
$filiere[]= ["Code_filiere"=>"SMA","Intitule"=>"4.Science mathematique et application"];
?>
<h2>Ajouter Etudiant</h2>


<form action="page5.php" method="POST" >
<div id="div1">
 
<td>Entrer le code étudiant :</td>
<input type="text" class="form-control"  name="codeE">
</br></br>
<td>Entrer le nom:</td>
<input type="text"  name="nomE" class="form-control"></br></br>
<td>Entrer le prenom :</td>
<input type="text"  name="prenomE"class="form-control" ></br></br>
<td>Entrer le mot de passe :</td>
<input type="password"  name="passE" class="form-control"></br></br>
Sexe :</br></br>
<input type="radio"  name="sexe" value="Homme"><td>Homme</td></br></br>
<input type="radio"  name="sexe" value="Femme"><td>Femme</td></br></br>
Loisirs :</td></br></br>
<input type="checkbox"  name="Loisirs" value="Sport">Sport</br></br>
<input type="checkbox"  name="Loisirs" value="Lecture">Lecture</br></br>
<input type="checkbox"  name="Loisirs" value="Musique">Musique</br></br>
<td>Filière :</td></br></br>
<select name = "filiere">

<?php 

foreach ($filiere as $fi) {
?>

<option  value ="<?= $fi["Code_filiere"] ?>" <?php if ($fi["Code_filiere"]=="SMI") echo "selected" ?>><?= $fi["Intitule"] ?></option>
<?php } ?>
	
</select></br></br>
<td>Saisissez ici un commentaire :</td>&nbsp&nbsp&nbsp&nbsp    
		<textarea  name =  "commentaire"  cols =30  rows = 4  >
		</textarea></br></br>

<input type = "submit" value ="Envoyer">  
  <input type = "reset" value ="Annuler"/>
</div>
</form>

<body>
</html>