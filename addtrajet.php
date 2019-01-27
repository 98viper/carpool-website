<?php

$m=mysqli_connect('localhost','root','','covoiturage'); 
$from=$_GET["from"];
$to=$_GET["to"];
$datevo=$_GET["datevo"];
$duree=$_GET["duree"];
$dist=$_GET["distance"];
$heure=$_GET["heure"];
$etat=$_GET["etat"];
$prix=$_GET["prix"];
$comm=$_GET["commentaire"];
$etape=isset($_GET["etape"]);
$frome=$_GET["frome"];
$toe=$_GET["toe"];
$houret=$_GET["heuret"];
$prixe=$_GET["prixe"];
$login=$_GET["login"];
$pickup=$_GET["heurepick"];





$reqlog="select num_uti from compte where login='".$login."'";
$res=mysqli_query($m,$reqlog);
$log=mysqli_fetch_row($res);
$uid=$log[0];


//////////////////////////////////////

$insert_trajet=
"insert into trajet
(num_uti,ville_depart_trajet,heure,distance,durree,date_trajet,heure_pickup,etat_trajet,commentaire,prix,ville_arrivee_trajet)
values
(".$uid.",'".$from."','".$heure."',".$dist.",'".$duree."','".$datevo."','".$pickup."','".$etat."','".$comm."',".$prix.",'".$to."')";
 
$res_trj=mysqli_query($m,$insert_trajet);
$trj_id=mysqli_insert_id($m);

//////////////////////////////////////

if($etape){

$insert_etape="insert into etape (num_trajet,ville_depart_trajet,heure,prix,ville_arrivee)values($trj_id,'".$frome."','".$houret."',".$prixe.",'".$toe."')";
$rs_et=mysqli_query($m,$insert_etape);
	
}

header("Location: conducteurhome.php?login=".$login."");
exit;





mysqli_close($m);
?>