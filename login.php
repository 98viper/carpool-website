<?php 
$m=mysqli_connect('localhost','root','','covoiturage');   
$log=$_GET["user"];
$password=$_GET["pswd"];



$sql="select num_type_compte from compte where login='".$log."' and password='".$password."'";
$result=mysqli_query($m,$sql);
$typ=mysqli_fetch_array($result);
$typeid=$typ[0];


// echo $uid;
//If username and password exist in our database then create a session.
//Otherwise echo error.
$reqtype="select * from compte c,type_compte t where c.num_type_compte=t.num_type_compte";
$restype=mysqli_query($m,$reqtype) or die(mysqli_error($m));

$typ=mysqli_fetch_row($restype);



// echo $typ[0]."    ".$typ[1]."   ".$typ[2]."   ".$typ[3];
if(mysqli_num_rows($result) == 1)
{
	if($typeid==3){
		$_SESSION['login'] = $login_user; // Initializing Session
        header("location: conducteurhome.php?login=".$log.""); // Redirecting To Other Page
	}else if($typeid==2){
		
		$_SESSION['login'] = $login_user; // Initializing Session
        header("location: passagerhome.html"); // Redirecting To Other Page
		
	}else if($typeid==1){
		
		$_SESSION['login'] = $login_user; // Initializing Session
        header("location: adminhome.html"); // Redirecting To Other Page
	}
	
	

}else{
echo "Incorrect username or password";

}

mysqli_close($m);  



?>















