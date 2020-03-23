 <?php

if($_POST["login"] != "moi" || $_POST["password"] !="douz") {

require("Autentification.php");
 
}
 else{
session_start();
$_SESSION["login"]=$_POST["login"];
 header ("location:ListeFilieres.php");
 }?>
</body>
</html>