<?php

$m=mysqli_connect('localhost','root','','covoiturage') or die(mysqli_error($m)); 
$login=$_GET['login'];
$newlogin=$_GET["newlogin"];
$s=$_GET["sexe"];
$name=$_GET["prenom"];
$lname=$_GET["nom"];
$tel=$_GET["tel"];
$cin=$_GET["cin"];
$vi=$_GET["ville"];
$dn=$_GET["datenaiss"];
$smoke=$_GET["fum"];
$email=$_GET["email"];



$updateuser="update utilisateur u,compte c 
set u.nom_uti='".$name."',u.prenom_uti='".$lname."',
u.phone_uti=".$tel.",u.cin_uti='".$cin."',u.ville_uti='".$vi."',u.sexe_uti='".$s."',u.date_naissance='".$dn."',
u.fumeur_oui_non='".$smoke."',c.email='".$email."',c.login='".$newlogin."' where u.num_uti=c.num_uti and c.login='".$login."'";
$resuser=mysqli_query($m,$updateuser) or die(mysqli_error($m));


header("Location: conducteurhome.php?login=".$newlogin."");
exit;


mysqli_close($m);

?>