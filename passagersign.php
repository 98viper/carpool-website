<?php 
$m = mysqli_connect('localhost','root','','covoiturage');     

$s=$_GET["sexe"];
$name=$_GET["prenom"];
$lname=$_GET["nom"];
$tel=$_GET["tel"];
$cin=$_GET["cin"];
$vi=$_GET["ville"];
$dn=$_GET["datenaiss"];
$age=$_GET["age"];
$smoke=$_GET["fum"];
$log=$_GET["user"];
$password=$_GET["pswd"];
$email=$_GET["email"];

//////////

$insert_user="insert into utilisateur (nom_uti,prenom_uti,phone_uti,cin_uti,ville_uti,sexe_uti,date_naissance,fumeur_oui_non)
values('".$lname."','".$name."','".$tel."','".$cin."','".$vi."','".$s."','".$dn."','".$smoke."')";
$res_user=mysqli_query($m,$insert_user);
$user_id=mysqli_insert_id($m) or die(mysqli_error($m));

 

$insert_acc="insert into compte(num_type_compte,num_uti,login,password,email) values(2,$user_id,'".$log."','".$password."','".$email."')";
$res_acc=mysqli_query($m,$insert_acc) or die(mysqli_error($m));







	

mysqli_close($m);  



?>