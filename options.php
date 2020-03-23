 
 
<html>
<head> 

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<style type="text/css">
table,td{
   border: 1px solid black;
   margin-left:30px;
}
</style>
</head>
<body>
<form action="couleur.php" method="get">
<table>
<tr>
<td>Langue:</td>
<td>
 <select name="Langue">
  <option value="AR">Arabe</option>
  <option value="FR" selected>Francais</option>
</select>
</td>
</tr>
<tr>
<td>Couleur du texte:</td>
<td>Rouge:<input type="radio" name="couleurText" value="red"></br> 
 Blanc:&nbsp <input type="radio" name="couleurText" value="white"></br>
 Pink:&nbsp&nbsp&nbsp <input type="radio" name="couleurText" value="pink"></br>
 Jaune: <input type="radio" name="couleurText" value="yellow"></br>
 Vert:&nbsp&nbsp&nbsp <input type="radio" name="couleurText" value="green"></br>
 </td>  
</tr>
<tr>
<td>Couleur d'arrière-plan:</td>
 <td>Rouge:<input type="radio" name="couleurPlan" value="red"></br> 
 Blanc:&nbsp <input type="radio" name="couleurPlan" value="white"></br>
 Pink:&nbsp&nbsp&nbsp <input type="radio" name="couleurPlan" value="pink"></br>
 Jaune: <input type="radio" name="couleurPlan" value="yellow"></br>
 Vert:&nbsp&nbsp&nbsp <input type="radio" name="couleurPlan" value="green"></br>
 Bleu:&nbsp&nbsp&nbsp <input type="radio" name="couleurPlan" value="blue"></br> 
 </td>  
</tr></br></br>
 
<td><input type="submit" name="Envoyer" value="Envoyer">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="reset" name="Annuler" value="Annuler"></td>
 
</table>
</body>
</html>