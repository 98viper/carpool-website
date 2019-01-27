<?php
$m = mysqli_connect('localhost','root','','covoiturage');  

$cpt=$_GET["numtrj"];
$login=$_GET["login"];

$reqall="delete 
from trajet
where 
num_trajet=".$cpt."";

$resall=mysqli_query($m,$reqall);

header("Location: conducteurhome.php?login=".$login."");
exit;




mysqli_close($m);
?>