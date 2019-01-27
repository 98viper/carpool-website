<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Covoiturage</title>
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
                                                <h1>All Accounts</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                        <a href="adminhome.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="allrides.php">All Rides</a>
                                                    </li>
                                                  
                                                    <li>
                                                        <a href="allaccs.php">All Accounts</a>
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
		<form action  ="deleteacc.php"  	method="get"       target="_self">	 
	 
<?php

$m = mysqli_connect('localhost','root','','covoiturage');  

$reqall="select * from utilisateur";
$resall=mysqli_query($m,$reqall) or die(mysqli_error($m));
echo "
<!DOCTYPE html>
<body style=background-color : pink >
<table width=100% >
	<tr>
	<td> <h3>NumCompte </h3></td> <td><h3> Nom </h3></td> <td><h3> Prenom </h3></td><td><h3>  Tel</h3></td><td><h3> CIN</h3></td><td><h3> Ville</h3></td><td><h3> Sexe</h3></td> <td><h3> Date De Naissance</h3></td><td><h3> Fumeur Ou Non</h3></td>
	</tr> 
	</body>
	</html>" ;
while($row=mysqli_fetch_array($resall,MYSQLI_BOTH)){

echo"
	<tr>
	<td>".$row[0]."</td> <td> ".$row[1]." </td> <td> ".$row[2]." </td><td>".$row[3]." </td>
	<td>".$row[4]." </td><td>".$row[5]." </td><td>".$row[6]." </td><td>".$row[7]." </td><td>".$row[8]." </td>
	<td><td><a href=deleteacc.php?numuti=".$row[0]." >Delete</a></td>
	</tr>";

}


mysqli_close($m);  
?>
     </table>
	
	 </form>
	 </center>
	 </div>
	 </td>
	 </div>
	 <br>
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
