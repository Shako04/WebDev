<html lang="en">
<!--Version 7.0 
	Name: Joey St. George
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/JS6.ico" />

    <title>Top Places to Visit in Your Lifetime!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev JavaScript Practice">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Places To Visit.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/Places To Visit.js"></script>
    <script src="JS/all.js"></script>

    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Put your .js files here ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</head>



<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link active">Places To Visit</a>
                    <a href="South-Island.php" class="nav-item nav-link" tabindex="-1">South Island</a>
                    <a href="Paris.php" class="nav-item nav-link" tabindex="-1">Paris</a>
                    <a href="Bora-Bora.php" class="nav-item nav-link" tabindex="-1">Bora Bora</a>
                    <a href="Maui.php" class="nav-item nav-link" tabindex="-1">Maui</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->
    <br>
    <main class="wideMargin" id="content">
        <h1 class="text-left my-3">Top Places to Visit in Your Lifetime!</h1>
        <!-- Edit this line for the title of your page -->
        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Put your content below this line ↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->

        <!--------------------------------Button--------------------------------->
        <button onclick="topFunction()" id="topBtn" title="Go to top">Top of Page</button>
        <script>

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () { scrollFunction() };
        </script>

        <!--------------------------------Cards--------------------------------->
        <div>
            <div class="cards">
                <center>
                    <!--------------------------------South Island, New Zealand--------------------------------->
                    <h4><b><a href="South-Island.html" target="_blank" rel="noopener noreferrer">South Island, New
                                Zealand</a></b></h4>
                    <p>#1 in World's Best Places to Visit</p>
                    <br>
                    <img src="images/South Island.jpeg" alt="Image of New Zealand's South Island Landscape"
                        style="width:100%">
                    <div class="container">
                </center>
            </div>

            <!--------------------------------Paris, France--------------------------------->
            <div class="cards">
                <center>
                    <h4><b><a href="Paris.html" target="_blank" rel="noopener noreferrer">Paris, France</a></b></h4>
                    <p>#2 in World's Best Places to Visit</p>
                    <br>
                    <img src="images/Paris.jpeg" alt="Image of the Eiffel Tower in Paris" style="width:100%">
                    <div class="container"></div>
                </center>
            </div>

            <!--------------------------------Bora Bora--------------------------------->
            <div class="cards">
                <center>
                    <h4><b><a href="Bora-Bora.html" target="_blank" rel="noopener noreferrer">Bora Bora</a></b></h4>
                    <p>#3 in World's Best Places to Visit</p>
                    <br>
                    <img src="images/Bora Bora.jpeg" alt="Image of Bora Bora's Landscape" style="width:100%">
                    <div class="container"></div>
                </center>
            </div>




            <!---------------------------------Maui------------------------------------------>
            <div class="cards">
                <center>
                    <h4><b><a href="Maui.html" target="_blank" rel="noopener noreferrer">Maui, Hawaii</a></b></h4>
                    <p>#4 in World's Best Places to Visit</p>
                    <br>
                    <img src="images/Maui.jpeg" alt="Image of Bora Bora's Landscape" style="width:100%">
                    <div class="container"></div>
                </center>
            </div>
        </div>
    </main>


    <!---------------------------------Footer------------------------------------>
    <!-- Footer -->
    <footer id="footer" class="page-footer font-small mdb-color lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Thanks!</h5>
                    <p>Thank you for visiting our travel website.
                        Happy traveling!
                    </p>


                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a id="links" href="http://shakonet.isd720.com/WebDev/" target="_blank"
                                    rel="noopener noreferrer">PROJECTS</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a id="links" href="https://www.shakopee.k12.mn.us/" target="_blank"
                                    rel="noopener noreferrer">ABOUT
                                    US</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a id="links" href="https://www.smore.com/z45xm" target="_blank"
                                    rel="noopener noreferrer">BLOG</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a id="links" href="https://www.shakopeesabers.com/" target="_blank"
                                    rel="noopener noreferrer">AWARDS</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Contact Us</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fa fa-home mr-3"></i> 100 17th Ave W, Shakopee, MN 55379
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-envelope mr-3"></i> 225838@shakopeeschools.org
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-phone mr-3"></i> (952) 496-5152
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                    <!-- Facebook -->
                    <a id="links" type="button" class="btn-floating btn-fb">
                        <i class="fa fa-facebook-f fa-3x"></i>
                    </a>
                    <!-- Twitter -->
                    <a id="links" type="button" class="btn-floating btn-tw">
                        <i class="fa fa-twitter fa-3x"></i>
                    </a>
                    <!-- Google +-->
                    <a id="links" ype="button" class="btn-floating btn-gplus">
                        <i class="fa fa-google-plus fa-3x"></i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <!--link-->
            <a id="links" href="https://mdbootstrap.com/"> </a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


</body>

</html>