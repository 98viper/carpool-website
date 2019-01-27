<?php 
$m = mysqli_connect('localhost','root','','covoiturage');     

$s=$_GET["sexe"];
$name=$_GET["prenom"];
$lname=$_GET["nom"];
$tel=$_GET["tel"];
$cin=$_GET["cin"];
$vi=$_GET["ville"];
$dn=$_GET["datenaiss"];
$smoke=$_GET["fum"];
$log=$_GET["user"];
$password=$_GET["pswd"];
$email=$_GET["email"];
$mat=$_GET["mat"];
$model=$_GET["modele"];
$marque=$_GET["marque"];
$nbrplace=$_GET["nbr"];
$comf=$_GET["comfort"];
//////////

$insert_user="insert into utilisateur (nom_uti,prenom_uti,phone_uti,cin_uti,ville_uti,sexe_uti,date_naissance,fumeur_oui_non)
values('".$lname."','".$name."','".$tel."','".$cin."','".$vi."','".$s."','".$dn."','".$smoke."')";
$res_user=mysqli_query($m,$insert_user);
$user_id=mysqli_insert_id($m) or die(mysqli_error($m));

 

$insert_acc="insert into compte(num_type_compte,num_uti,login,password,email) values(1,$user_id,'".$log."','".$password."','".$email."')";
$res_acc=mysqli_query($m,$insert_acc) or die(mysqli_error($m));


$insert_car="insert into vehicule values(".$mat.",$user_id,'".$marque."','".$model."',".$nbrplace.",'".$comf."')";
$res_car=mysqli_query($m,$insert_car) or die(mysqli_error($m));





	

mysqli_close($m);  

header("Location: conducteurhome.html");
exit;


?>