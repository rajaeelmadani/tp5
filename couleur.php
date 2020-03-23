<?php
  if (!isset($_GET["couleurText"]))
 setCookie("couleurText",$_GET["couleurText"],time()+ 864000);
 if (!isset($_GET["couleurPlan"]))
 setCookie("couleurPlan",$_GET["couleurPlan"],time()+ 864000);
 header("location: ListeFilieres.php");
?> 