<?php
$m = mysqli_connect('localhost','root','','covoiturage');  
$nom=$_GET["nom"] ;

$prenom=$_GET["prenom"] ;
$date=$_GET["date"] ;
$from=$_GET["from"] ;
$to=$_GET["to"] ;
$nbr=$_GET["nbr"] ;
$sql="SELECT  num_uti, num_trajet FROM trajet WHERE ville_depart_trajet='".$from."' AND ville_arrivee_trajet='".$to."'
AND date_trajet='".$date."'";
$result = mysqli_query($m,$sql);
while($row=mysqli_fetch_assoc($result)){
$num= $row['num_uti'];
$n= $row['num_trajet'];
}
$f="DELETE FROM reserver WHERE num_uti='".$num."'AND num_trajet='".$n."' AND nb_place_reserve='".$nbr."'";
echo $f;
$result= mysqli_query($m,$f);




?>