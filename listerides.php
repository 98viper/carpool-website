<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Covoiturage - All Rides</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	  <body>

        <header class="header">

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a href="logout.php"> 
                                   Log Out
                                </a> 

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                       

                        </div><!-- end .col-sm-8 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">


                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>All Rides</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
													 <?php $login=$_GET['login'];
															
															echo "<a href=conducteurhome.php?login=$login>Home</a>"
															?> 
                                                        
                                                    </li>
                                                    <li>
                                                        <a href="#">Trajets</a>
														<ul class="sub-menu">
														<li>
														 <?php $login=$_GET['login'];
															
															echo "<a href=add-ride.php?login=$login>Ajouter Trajet</a>"
															?> </li>
														  <li>
															
															<?php $login=$_GET['login'];
															
															echo "<a href=listerides.php?login=$login>trajets</a>"
															?> 
														 </li>
														</ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Account</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="updateconduct.html">Modifier</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

               
				
            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">
		
		
			 
	 
<?php

$m = mysqli_connect('localhost','root','','covoiturage'); 

if(isset($_GET["login"])){
 $log=$_GET["login"];

$reqid="select num_uti from compte where login='".$log."'";
$resid=mysqli_query($m,$reqid) or die(mysqli_error($m));
$id=mysqli_fetch_array($resid);
$uid=$id[0];

$res="select num_trajet,ville_depart_trajet,ville_arrivee_trajet,heure,distance,durree,date_trajet,
heure_pickup,etat_trajet,prix,commentaire from trajet where num_uti=$uid";
$resall=mysqli_query($m,$res) or die(mysqli_error($m));

echo "
<!DOCTYPE html>
<body style=background-color : pink >
<table width=100% >
	<tr>
	<td> <h3>NumTrajet </h3></td>
	<td><h3> De </h3></td><td><h3> A</h3></td>
	<td><h3>  Heure Trajet</h3></td>
	<td><h3> Distance</h3></td><td><h3> Duree</h3></td><td><h3> Date</h3></td> <td><h3> Heure PickUp</h3></td><td><h3> Etat</h3></td>
	<td><h3> Prix</h3></td><td><h3> Commentaire</h3></td>
	</tr> 
	</body>
	</html>" ;
while($row=mysqli_fetch_array($resall,MYSQLI_BOTH)){

echo"
	<tr>
	<td>".$row[0]."</td> <td> ".$row[1]." </td> <td> ".$row[2]." </td><td>".$row[3]." </td>
	<td>".$row[4]." </td><td>".$row[5]." </td><td>".$row[6]." </td><td>".$row[7]." </td><td>".$row[8]." </td>
	<td>".$row[9]." </td><td>".$row[10]." </td>
	<td><a href=deleteridecond.php?numtrj=".$row[0]."&login=".$log.">Delete</a></td>
	</tr>";

}
}

mysqli_close($m);  
?>
    
	
</table>
	
  </section><!-- end .main-content -->
<tr>
	
       
     



        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>
</html>
	