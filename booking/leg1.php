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
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       
        <link rel="stylesheet" href="../booking/demo.css"/>
        <link rel="stylesheet" href="../booking/footer-distributed-with-address-and-phones.css"/>
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="pic/favicon.ico" type="image/x-icon">
    </head>
    <link rel="stylesheet" href="../booking/xss.css"/>
    <body>
        <font size='3.5'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(45deg, rgba(38,160,231,1) 23%, rgba(32,115,176,1) 65%, rgba(29,89,145,1) 89%, rgba(27,77,131,1) 100%);color: #ffffff;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="home.php"><img style="width: 50px; height: auto;" src="pic/logoPNG.png"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
                    <li class="nav-item active">
                        <a class="nav-link" href="leg1.php">190 XPROB<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="leg2.php">127VS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="leg3.php">701HDV</a>
                    </li>
                    
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
       
            <div class="container mt-4">
                <div class="row">
                <?php
                        require_once'dbconfig.php';
                        $sql = "SELECT * FROM device WHERE device_name='MANFROTT 190 XPROB/496RC2'";
                            if($result=$conn->query($sql)){
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                    ?>
           
                    <div class=" col-xs-12 col-6  mt-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-6 col-lg-6 text-center">
                                    <img style='width:100%; height: auto;' src='pic/E_MANFROTTOรุ่น190XPROB_496RC2.png'>
                                    <h5 class="card-title"><?php echo $row['device_name']; ?></h5>
                                       
                                </div><!-- col-4 -->
                                
                                <div class="col-6 col-lg-6">
                                    <div class="card-body text-center">
                                     
                                        <h5 class="card-title">วันที่ยืม : <?php echo $row['date_booking']; ?></h5>
                                        <h5 class="card-title">เวลา : <?php echo $row['time_booking']; ?></h5>
                                        <br>
                                        <h5 class="card-title">วันที่คืน : <?php echo $row['date_return']; ?></h5>
                                        <h5 class="card-title">เวลา : <?php echo $row['time_return']; ?></h5>
                                        
                                    </div>
                                    <div class="card-footer text-center">
                                        <h2> <?php echo $row['status']; ?> </h2>

                                    </div>

                                </div><!-- col-8 -->
                                 <div class="col-lg-12">
                                  <div class="row">
                                        <div class="col-6" >
                                             <h5 class="card-title text-right mt-2"> รหัสอุปกรณ์ : </h5>
                                        </div>
                                         <div class="col-6 text-left" >
                                              <h1><?php echo $row['ID_device']; ?></h1> 
                                             
                                        </div>
                                   </div>
                                   
                                    
                                </div>
                                <div class="col-lg-12">
                                  
                                        <div class="col" >
                                        <a href="form.php?id=<?php echo $row['ID_device'];  ?>" class="btn btn-danger mb-3 w-100" style="background-color: #2f3638 !important; border-color: #76b6c2">รายละเอียด</a>
                                        </div>
                                   
                                    
                                </div>
                            </div><!-- row -->
                        </div><!-- card -->
                    </div>

               
            <?php
                            }
                        }
                    }
            ?>

        </div>
            </div>



        <!--        <form method="POST"

                      align ="center" >
        
        

                   </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
                    
        
        
        
        

        </form>-->

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
