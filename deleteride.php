<?php
$m = mysqli_connect('localhost','root','','covoiturage');  

$numtrj=$_GET["numtrj"];


$reqall="DELETE 
FROM trajet
WHERE
num_trajet=".$numtrj."";

$resall=mysqli_query($m,$reqall) or die(mysqli_error($m));

header("Location: allrides.php");
exit;




mysqli_close($m);
?>