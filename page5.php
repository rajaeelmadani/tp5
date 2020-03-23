<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 

<style type="text/css">
h2{
	color:#8f72cc;
}
</style>
</head>
<body>
<h2>Réception des informations</h2>
<b>Bonjour</b> <?=$_POST["nomE"]?></br>
<b>Votre mot de passe est</b> <?=$_POST["passE"]?></br>
<b>Votre Sexe est </b><?=$_POST["sexe"]?></br>
<b>Votre filière est</b> <?=$_POST["filiere"]?></br>
<b>Vos loisirs : </b><?=$_POST["Loisirs"]?></br>
<b>vous avez entré le commentaire suivant: </b><?=$_POST["commentaire"]?></br>
<h2>Informations environnement</h2>
Votre adresse :<?=$_SERVER["REMOTE_ADDR"]?></br>
Votre navigateur :<?=$_SERVER["HTTP_USER_AGENT"]?></br>
Vous étiez sur la page :<?=$_SERVER["HTTP_REFERER"]?></br>
Vous étiez sur la page :<?=$_SERVER["HTTP_REFERER"]?></br>
Vous etes actuellement dans le script:<?=$_SERVER["PHP_SELF"]?></br>
à la ligne:<?=__LINE__?></br>
Répertoire:<?=__DIR__?></br>
la version de PHP tournée par le serveur:<?=PHP_VERSION?></br>
le système d'exploitation du serveur:<?=PHP_OS?></br></br></br>
<a href="AjouterEtud.php">Revenir au formulaire d'ajout</a></br>
<a href="AjouterEtud.php">Revenir à l'acceuil </a></br>
</body>
</html>
