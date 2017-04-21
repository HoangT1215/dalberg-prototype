<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    
    // if session is not set this will redirect to login page
    if( !isset($_SESSION['user']) ) {
        header("Location: index2.php");
        exit;
    }
    // select loggedin users detail
    $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dalberg agricultural data site</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Dalberg</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#forms">Forms</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li> <a href="logout.php?logout"><b><em>Sign Out</em></b></a></li>
                        </ul>
                    </li>
          </ul>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome <?php echo $userRow['userName']; ?></div>
                <div class="intro-heading">Revolutionize Agdata</div>
                <a href="#forms" class="page-scroll btn btn-xl">Data Input</a>
                <a href="#queries" class="page-scroll btn btn-xl">Regional/National Information</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="forms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">FORMS</h2>
                    <h3 class="section-subheading text-muted">Follow these links to access the relevant forms.</h3>
            </div>
                </div>
            <!--This are forms in the profile-->
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/farminfo.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Farm records form</h4>
                        <p class="text-muted"><a href="https://docs.google.com/forms/d/e/1FAIpQLScXqT_KrrAZziUvxsIV57LFYhmSSBhkRUdkiRSig-zn7OsBeg/viewform?usp=sf_link">Online form</a></p>
                        <p class="text-muted"><a href="forms/farminfoform.pdf">Printable form</a></p>
                        <P><a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>UPLOAD HERE</em></b></a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/equipment.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Equipments forms</h4>
                        <p class="text-muted"><a href="https://docs.google.com/forms/d/e/1FAIpQLSf2xgfh07UejQJ7Ml0eP6VYNCtGD1QwoQK5yGtWl72Rqb7prA/viewform?usp=sf_link">Online form</a></p>
                        <p class="text-muted"><a href="forms/farmequipment.pdf">Printable form</a></p>
                        <P><a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em><a href="forms/farmequipment.pdf">UPLOAD HERE</em></b></a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/applicationform.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Finances forms</h4>
                        <p class="text-muted"><a href="https://docs.google.com/forms/d/e/1FAIpQLScpxApDGGnC7w79tfSxwZ08mCi15jrYJ-6AUCg3l247CWEO8g/viewform?usp=sf_link">Online forms</a></p>
                        <p class="text-muted"><a href="forms/financialworksheet.pdf">Printable form</a></p>
                        <P><a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>UPLOAD HERE</em></b></a></p>
                    </div>
                </div>
               
                </div>
            </div>
        </div>
        <!--End of forms in the profile-->
    </section>
     <!-- Services Section -->
    <section id="queries">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Maps</h2>
                    <h3 class="section-subheading text-muted">This section should include interactive maps, charts and other data visualization forms. I have used an example here from Kenya.org.data to show how these maps work. Clicking on a county brings up a summary of some of Its data. In the main platform this would be actual agricultural summaries.The search and parameter prompts help filter and present the right data to the user.</h3>
                </div>
            </div>
        <div class="row text-center">
               <iframe src="http://kenya.opendataforafrica.org/" width="90%" height="1000" frameborder="0" marginheight="0" scrolling="true" marginwidth="0">Loading...</iframe>
            
        </div>
    </section>

    <!-- Portfolio Grid Section -->
   

    <!-- Team Section -->


    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        <li><a href="logout.php?logout"><b><em>Sign Out</em></b></a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Form description</h2>
                                <p class="item-intro text-muted">Use this form to record farm data. .</p>
                                <img class="img-responsive img-centered" src="img/portfolio/farminfo.png" alt="">
                                <p>The online form is useful if you have good internet access.For the printable form, you can either mail it to 12345 Daldata Street, USA, take a picture or scan the document as pdf or if excell files, upload the filled file. Upload <a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>HERE</em></b></a> or email it with your name and identification to <a>dalbergemail12345@data.com </a></p>
                                <ul class="list-inline">
                                    <li class="text-muted"><a href="https://docs.google.com/forms/d/e/1FAIpQLScXqT_KrrAZziUvxsIV57LFYhmSSBhkRUdkiRSig-zn7OsBeg/viewform?usp=sf_link">Online form</a></li>
                                    <li class="text-muted"><a href="forms/farminfoform.pdf">Printable form</a></li>
                                    <li><a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>UPLOAD</em></b></a></li>
                                </ul>
                                <hr/>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Form instructions</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Form description</h2>
                                <p class="item-intro text-muted">Use this form to record equipment data. .</p>
                                <img class="img-responsive img-centered" src="img/portfolio/equipment.png" alt="">
                                <p>The online form is useful if you have good internet access.For the printable form, you can either mail it to 12345 Daldata Street, USA, take a picture or scan the document as pdf or if excell files, upload the filled file. Upload <a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>HERE</em></b></a> or email it with your name and identification to <a>dalbergemail12345@data.com </a></p>
                                <ul class="list-inline">
                                    <li class="text-muted"><a href="https://docs.google.com/forms/d/e/1FAIpQLSf2xgfh07UejQJ7Ml0eP6VYNCtGD1QwoQK5yGtWl72Rqb7prA/viewform?usp=sf_link">Online form</a></li>
                                    <li class="text-muted"><a href="forms/farmequipment.pdf">Printable form</a></li>
                                    <li><a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>UPLOAD</em></b></a></li>
                                </ul>
                                <hr/>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Form instructions</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Financial forms</h2>
                                <p class="item-intro text-muted">Use this form to record your farm finances.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/applicationform.png" alt="">
                                <p>The online form is useful if you have good internet access.For the printable form, you can either mail it to 12345 Daldata Street, USA, take a picture or scan the document as pdf or if excell files, upload the filled file. Upload <a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>HERE</em></b></a> or email it with your name and identification to <a>dalbergemail12345@data.com </a></p>
                                <ul class="list-inline">
                                    <li class="text-muted"><a>Online form</a></li>
                                    <li class="text-muted"><a href="forms/financialworksheet.pdf"">Printable form</a></li><hr/>
                                    <li><a href="https://docs.google.com/a/minerva.kgi.edu/forms/d/e/1FAIpQLScZEmy0tPY5NolaucEW9k38sG40upb-GKLQEJDtZl14sWjsuQ/viewform?usp=sf_link"><b><em>HERE</em></b></a></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>