<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="controlador/images/icon.jpg" />




        <title>Cover Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="controlador/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="controlador/bootstrap/css/bootstrap-social.css">
        <link rel="stylesheet" href="controlador/font-awesome-4.3.0/css/font-awesome.min.css">


        <!-- Custom styles for this template -->
        <link href="controlador/css/cover.css" rel="stylesheet">
        <link href="controlador/css/index.css" rel="stylesheet">


    </head>

    <body>

        <div class="site-wrapper">

            <div class="site-wrapper-inner">

                <div class="cover-container">

                    <div class="masthead clearfix">
                        <div class="inner">
                            
                            
                                   
                            
                            <h3 class="masthead-brand">Conexión a redes sociales</h3>
                            
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li class="active"><a href="#">Inicio</a></li>


                                    <li><a href="#" data-toggle="modal" data-target="#myModal">Características</a></li>


                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title textblack" id="myModalLabel" >Características</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="textblack">Seleccione la Red Social a la cual desea conectarse y obtener su informacion.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    
                                                    <p class="textblack">
                                                        Las redes con las cuales se puede llevar a cabo la conexión son: <a href="https://www.facebook.com/" style="color: #002166;" target="_blank">Facebook</a>, <a href="https://www.twitter.com/"  style="color: #002166;" target="_blank">Twitter</a>, <a href="https://www.linkedin.com/" style="color: #002166;" target="_blank">Linkedin</a>, <a href="https://www.instagram.com/"  style="color: #002166;" target="_blank">Instagram</a> y <a href="https://plus.google.com/" style="color: #002166;" target="_blank">Google Plus</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                </ul>
                            </nav>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-4">
                            <button class="btn btn-facebook btn-circle btn-xl" onclick="location.href = 'controlador/php/login-with.php?provider=Facebook'">
                                <i class="fa fa-facebook"></i>
                            </button>





                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <button class="btn btn-twitter btn-circle btn-xl" onclick="location.href = 'controlador/php/login-with.php?provider=Twitter'">
                                <i class="fa fa-twitter"></i>
                            </button>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <button class="btn btn-google-plus btn-circle btn-xl" onclick="location.href = 'controlador/php/login-with.php?provider=Google'">
                                <i class="fa fa-google-plus"></i>
                            </button>

                        </div><!-- /.col-lg-4 -->

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-linkedin btn-circle btn-xl" onclick="location.href = 'controlador/php/login-with.php?provider=LinkedIn'">
                                <i class="fa fa-linkedin"></i>
                            </button>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-instagram btn-circle btn-xl" onclick="location.href = 'controlador/php/login-with.php?provider=Instagram'">
                                <i class="fa fa-instagram"></i>
                            </button>

                        </div><!-- /.col-lg-4 -->


                    </div>               

                    <div class="mastfoot">
                        <div class="inner">
                            <p>Diseñado para <a href="http://www.ucatolica.edu.co/easyWeb/">Universidad Católica de Colombia</a>, por Andrés Felipe Coca Castro - Cristian David Franco Garcia.
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="controlador/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
<!--http://hayageek.com/login-with-facebook-twitter-google-php/-->