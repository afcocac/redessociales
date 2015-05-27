<!DOCTYPE html>
<!--
https://developer.linkedin.com/docs/fields/basic-profile
-->
<html>
    <head>
        <title>LinkedIn Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="controlador/bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="image/png" href="controlador/images/icon.jpg" />
        <link rel="stylesheet" href="controlador/css/index.css">
        <link rel="stylesheet" href="controlador/css/red.css">
    </head>

    <body>

        <!-- NAVBAR -->


        <div class="navbar-wrapper">

            <div class="container">



                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expandcontrols="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo">
                                <a  href="index.php">
                                    <img id ="icon" alt="Brand"  class="img-circle" src="controlador/images/icon.jpg" ><h3 id="title">Conexión a Redes Sociales</h3></a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a class="glyphicon glyphicon-home" href="index.php">&nbsp;Home</a></li>
                                <li><a class="glyphicon glyphicon-flag" href="#about"   data-toggle="modal" data-target=".bs-example-modal-sm">&nbsp;About</a></li>

                            </ul>

                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <p class="tc">Seleccione la Red Social a la cual desea conectarse y obtener su informacion. <br><br>
                                            Las redes con las cuales se puede llevar a cabo la conexión son: <a href="https://www.facebook.com/" target="_blank">Facebook</a>, <a href="https://www.twitter.com/" target="_blank">Twitter</a>, <a href="https://www.linkedin.com/" target="_blank">Linkedin</a>, <a href="https://www.instagram.com/" target="_blank">Instagram</a> y <a href="https://plus.google.com/" target="_blank">Google Plus</a>.</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav navbar-nav esquina">
                                <li class="active"><a class="glyphicon glyphicon-log-out" href="controlador/php/logout.php">&nbsp;Logout</a></li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


        <!-- /NAVBAR -->


        <div class="container"  >
            <p id="profileImage" class="centrado"></p>
            <h2 id="displayName" class="centrado"></h2>
            <table class="table table-striped">
                <tr>
                    <td class="col-md-6"><b>Identifier:</b></td>
                    <td id="userId" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>User Name:</b></td>
                    <td id="userName" class="col-md-6"></td>
                </tr>
                 <tr>
                    <td class="col-md-6"><b>First Name:</b></td>
                    <td id="userFirstName" class="col-md-6"></td>
                </tr>
                 <tr>
                    <td class="col-md-6"><b>Last Name:</b></td>
                    <td id="userLastName" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Profile URL:</b></td>
                    <td  class="col-md-6"><a href="" id="profileURL"></a></td>
                </tr>
                
                <tr>
                    <td class="col-md-6"><b>Gender:</b></td>
                    <td id="gender" class="col-md-6"></td>
                </tr>
                
                <tr>
                    <td class="col-md-6"><b>Web Site URL:</b></td>
                    <td id="webSiteURL" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Gender:</b></td>
                    <td id="gender" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Language:</b></td>
                    <td id="language" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Description:</b></td>
                    <td id="description" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Email:</b></td>
                    <td id="email" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Phone:</b></td>
                    <td id="phone" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Region:</b></td>
                    <td id="region" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Country:</b></td>
                    <td id="country" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>City:</b></td>
                    <td id="city" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Birth Day:</b></td>
                    <td id="birthDay" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Birth Month:</b></td>
                    <td id="birthMonth" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Birth Year:</b></td>
                    <td id="birthYear" class="col-md-6"></td>
                </tr>
                <tr>
                    <td class="col-md-6"><b>Age:</b></td>
                    <td id="age" class="col-md-6"></td>
                </tr>
            </table>
            <h3>Contacts</h3>
            <table id="contacts" class="table table-striped">

            </table>
            <h3>User Activities</h3>
            <table id="userActivities" class="table table-striped">

            </table>
            <h3>User Activities Timeline</h3>
            <table id="userActivitiesTimeline" class="table table-striped">

            </table>
        </div>
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2015 Web Company, Inc. &middot;</p>
        </footer>
        <script src="controlador/js/jquery-1.11.2.min.js"></script>
        <script src="controlador/bootstrap/js/bootstrap.js"></script>
        <script src="controlador/js/twitter.js"></script>
    </body>

</html>
