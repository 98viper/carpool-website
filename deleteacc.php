<?php
$m = mysqli_connect('localhost','root','','covoiturage');  

$id=$_GET["numuti"];


$reqall="delete u.* , c.* 
from compte c  left join utilisateur u 
on u.num_uti=c.num_uti where 
u.num_uti=".$id." and c.num_uti=".$id."";

$resall=mysqli_query($m,$reqall) or die(mysqli_error($m));

header("Location: allaccs.php");
exit;




mysqli_close($m);
?>