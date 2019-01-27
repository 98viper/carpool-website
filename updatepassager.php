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

$insert_user="update utilisateur a, compte b
set nom_uti='".$lname."',prenom_uti='".$name."',phone_uti='".$tel."',cin_uti='".$cin."',ville_uti='".$vi."',sexe_uti='".$s."',date_naissance='".$dn."',fumeur_oui_non='".$smoke."'
where a.num_uti=b.num_uti and b.login='".$log."'and b.password='".$password."'";
$res_user=mysqli_query($m,$insert_user);
//$user_id=mysqli_insert_id($m) or die(mysqli_error($m));

 
echo "$email";
$insert_acc="update compte 
set email='".$email."'
where  login='".$log."' and password='".$password."'";
$res_acc=mysqli_query($m,$insert_acc) or die(mysqli_error($m));







	

mysqli_close($m);  



?>