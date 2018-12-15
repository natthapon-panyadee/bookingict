<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once './dbconfig.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../booking/xss.css"/>

        <link rel="stylesheet" href="../booking/demo.css"/>
        <link rel="stylesheet" href="../booking/footer-distributed-with-address-and-phones.css"/>
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="pic/favicon.ico" type="image/x-icon">

    </head>

    <body>
        <?php         
         require_once('structure/header.php');
        ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(45deg, rgba(38,160,231,1) 23%, rgba(32,115,176,1) 65%, rgba(29,89,145,1) 89%, rgba(27,77,131,1) 100%);color: #ffffff;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="home.php"><img style="width: 50px; height: auto;" src="pic/logoPNG.png"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 "  >
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">หน้าแรก<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="camera.php">กล้อง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="legcammera.php">อุปกรณ์ขาตั้งกล้อง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="flash.php">อุปกรณ์แฟลช</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mic.php">ไมโครโฟน</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="return.php">คืนอุปกรณ์</a>
                    </li>
                </ul>

             

            </div>
        </nav>
        <br>
        <div align="center">
        <h2>เลือกประเภทอุปกรณ์</h2>
        </div>

        <!--        <div class="container-fluid">
                    <div class="row" style="background: linear-gradient(45deg, rgba(38,160,231,1) 23%, rgba(32,115,176,1) 65%, rgba(29,89,145,1) 89%, rgba(27,77,131,1) 100%);" >
                        <div class="col-4" align ="center">
                            <br><br>
                            <h4> เว็บไซต์ตรวจสอบและยืมคืนอุปกรณ์ไอที <br><br>
                                สำหรับ<br><br>นักศึกษาคณะเทคโนโลยีสารสนเทศและการสื่อสาร<br><br>
                                มหาวิทยาลัยศิลปากร</h4> 
                        </div>
                        
                        <div class="col-4 " align ="center">
                            <div class="p-2 bd-highlight">
                                <a class="navbar-brand" href="#">
                                    <img style="width: 70%; height: auto;" src="pic/logoPNG.png">
                                </a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>-->
        <font size='3.5'> 




        </font>

<!--        <div class="box_search mt-3" style="margin-left: 40%; width: 100%; height: auto;">
            <form class="form-inline " align="center">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>-->






        <div class="dropdown-menu" style="color: #FFFFFF;">
            <a class="dropdown-item" href="camera.php">กล้อง</a>
            <a class="dropdown-item" href="legcammera.php">อุปกรณ์ขาตั้งกล้อง</a>
            <a class="dropdown-item" href="flash.php">อุปกรณ์แฟลช</a>
            <a class="dropdown-item" href="mic.php">ไมโครโฟน</a>
        </div>



        <div class="row col-12 mt-5" align ="center" >
            <div class="col-6 mb-5"><div class="card" style="width: 30rem;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/1.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/2.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/3.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/4.png" alt="Card image cap">
                            </div>
                        </div>
                        <ol class="carousel-indicators" style="top: 290px;">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                    <div class="card-body">
                        <h5 class="card-title">กล้อง</h5>
    <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <a href="camera.php" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>


            <div class="col-6 mb-5 "><div class="card" style="width: 30rem;">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner mt-2">
                            <div class="carousel-item active">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/E_MANFROTTOรุ่น190XPROB_496RC2.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/F_MANFROTTOรุ่น701HDVMVT502AM.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/G_MANFROTTOรุ่น127VS.png" alt="Card image cap">
                            </div>
                            <!--                        <div class="carousel-item">
                                                        <img class="card-img-top " style="width: 60%; height: auto;" src="pic/4.png" alt="Card image cap">
                                                    </div>-->
                        </div>
                        <ol class="carousel-indicators" style="top: 290px;">
                            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>

                        </ol>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                    <div class="card-body">
                        <h5 class="card-title">อุปกรณ์ขาตั้งกล้อง</h5>
    <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <a href="legcammera.php" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>

            <div class="col-6 mb-5"><div class="card" style="width: 30rem;">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner mt-2">
                            <div class="carousel-item active">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/H_canonspeelight 580ex 2.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/K_cannon-320EX-ll.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/I_canonspeedlite320.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/J_cannon-430EX-ll.png" alt="Card image cap">
                            </div>
                            <!--                        <div class="carousel-item">
                                                        <img class="card-img-top " style="width: 60%; height: auto;" src="pic/4.png" alt="Card image cap">
                                                    </div>-->
                        </div>
                        <ol class="carousel-indicators" style="top: 290px;">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                    <div class="card-body">
                        <h5 class="card-title">อุปกรณ์แฟลช</h5>
    <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <a href="flash.php" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>

            <div class="col-6 mb-5"><div class="card" style="width: 30rem;">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/L_ไมโครโฟนติดหัวกล้อง.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/RODEBlimp.png" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top " style="width: 60%; height: auto;" src="pic/RODEFur.png" alt="Card image cap">
                            </div>

                        </div>
                        <ol class="carousel-indicators" style="top: 290px;">
                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>

                        </ol>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                    <div class="card-body">
                        <h5 class="card-title">ไมโครโฟน</h5>
    <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <a href="mic.php" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>




        </div>

        <footer class="footer-distributed" style="background: linear-gradient(45deg, rgba(38,160,231,1) 23%, rgba(32,115,176,1) 65%, rgba(29,89,145,1) 89%, rgba(27,77,131,1) 100%);
                ">

            <div class="footer-left">

                <span><img style="width: 20%; height: auto;" src="pic/logoPNG.png"></span>

                <p class="footer-links">
                    <a href="home.php">หน้าแรก</a>
                    ·
                    <a href="camera.php">กล้อง</a>
                    ·
                    <a href="legcammera.php">อุปกรณ์ขาตั้งกล้อง</a>
                    ·
                    <a href="flash.php">อุปกรณ์แฟลช</a>
                    ·
                    <a href="mic.php">ไมโครโฟน</a>
                    ·

                </p>

                <p class="footer-company-name" style="color: #ffffff;">ICT Booking &copy; 2018</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"style="background-color: #3382b1;"></i>
                    <p><span>Silpakorn University</span> Phetchaburi, Thailand</p>
                </div>

                <div>
                    <i class="fa fa-phone"style="background-color: #3382b1;"></i>
                    <p>+1 555 123456</p>
                </div>

                <div>
                    <i class="fa fa-envelope"style="background-color: #3382b1;"></i>
                    <p><a style="color: #ffffff;"  href="mailto:support@company.com">ictsubooking@company.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about"   style="color: #ffffff;" >
                    <span>About the company</span>
                    ICT BOOKING.
                </p>

                <div class="footer-icons">

                    <a href="#" style="background-color: #3382b1;"><i class="fa fa-facebook"></i></a>
                    <a href="#" style="background-color: #3382b1;"><i class="fa fa-twitter"></i></a>
                    <a href="#" style="background-color: #3382b1;"><i class="fa fa-linkedin"></i></a>
                    <a href="#" style="background-color: #3382b1;"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
