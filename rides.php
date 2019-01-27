

<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Tout Trajets</title>
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
                                    Log out
                                </a> 
                                
                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        <div class="col-md-8 col-sm-8 col-xs-12">

                            

                        </div><!-- end .col-sm-8 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>My ride</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                
                                                   <ul class="navigation">
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="rides.html">tout trajets</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#">Account</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="updatepassager.html">Modifier</a>
                                                            </li>
                                                        </ul>
                                                    </li>
													</ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                            

                            </div><!-- end .col-sm-12 -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">
              <form action  ="rides.php"  	method="get"       target="_self">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>All rides</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="page-content">

                            <div class="rides-list">
                                
                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#"><?php
$m = mysqli_connect('localhost','root','','covoiturage');  
$from=$_GET["from"];
$to=$_GET["to"];
$date=$_GET["date"];
$nbr=$_GET["nbr"];

$req="SELECT nom_uti, prenom_uti, ville_depart_trajet,ville_arrivee_trajet,heure_pickup,prix 
FROM trajet a, utilisateur b WHERE a.num_uti=b.num_uti AND a.ville_depart_trajet='".$from."' AND a.ville_arrivee_trajet='".$to."'
AND a.date_trajet='".$date."'";
$result = mysqli_query($m,$req);
echo "<table cellspacing=50 border='1'>
<tr>
<td> Name</td><td></td> <td>  Prenom</td> <td>  Depart</td> <td>  Arrivee</td> <td>   Pick up hour</td> <td>  Prix</td>

</tr>



";



while($row = mysqli_fetch_array($result))

{$nom=$row['nom_uti'];
$prenom=$row['prenom_uti'];




echo "<tr>";
echo "<td>" . $row['nom_uti'] . "</td>";echo "<td>" . $row['prenom_uti'] . "</td>";
echo "<td>" . $row['ville_depart_trajet'] . "</td>";echo "<td>" . $row['ville_arrivee_trajet'] . "</td>";
echo "<td>'" . $row['heure_pickup'] . "</td>";echo "<td>" . $row['prix'] . "</td>";
echo"<td><a href=reserver.php?nom=".$nom."&prenom=".$prenom."&to=".$to."&date=".$date."&from=".$from."&nbr=".$nbr.">Reserver</a></td>";
echo"<td><a href=annuler.php?nom=".$nom."&prenom=".$prenom."&to=".$to."&date=".$date."&from=".$from."&nbr=".$nbr.">Annuler</a></td>";
echo "</tr>";


}
echo "</table>";

mysqli_close($m);

?></a></h3>
                                    </div>

                                    <ul class="ride-meta">

                                        
                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <div class="clearfix"></div>

                                <div class="post-pagination pagination-margin clearfix">

                                    <div class="next pull-right">
                                        <a href="#">
                                            Next
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>

                                </div><!-- end .post-pagination -->

                            </div><!-- end .events-list -->

                        </div><!-- end .page-content -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                </div><!-- end .row -->
            </div><!-- end .container -->
</form>
        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by My ride
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Log in</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="email" type="email"  placeholder="E-Mail">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="confirmpass" type="password"  placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
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
