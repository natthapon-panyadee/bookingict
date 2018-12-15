<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="../booking/demo.css"/>
        <link rel="stylesheet" href="../booking/footer-distributed-with-address-and-phones.css"/>
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="pic/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



        <script>
              $( function() {
                $( ".datepicker" ).datepicker();
              } );
        </script>
       
    </head>
    <body style="font-family: 'Prompt', sans-serif !important; ">
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
       
                
                
<?php

                require_once './dbconfig.php';
              

?>
            <div class="container" >
                <div class="row">
                    <div class="col-4 mt-4">
                    </div>

                       
                    <div class="col-4 mt-4">
                        <br><br><br>
                        <h1>คืนอุปกรณ์</h1>
                        <div >
                           <br>
                           <h5>รหัสอุปกรณ์</h5>
                            <input type="text" class="card-title form-control" id="ID_device" placeholder="รหัสอุปกรณ์" >
                            
                        </div>
                        <div style="padding-bottom: 30px;" >
                           <br>
                           <h5>รหัสนักศึกษา</h5>
                            <input type="text" class="card-title form-control" placeholder="รหัสนักศึกษา" >
                            
                        </div>
                        <button id="post-book" class="form-control btn btn-primary ">ยืนยัน </button>
                        <a href="home.php">
                           <button class="btn btn-danger form-control mt-2"> ยกเลิก</button>
                        </a>
                    </div>
                    <div class="col-4 mt-4">
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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
    <script type="text/javascript"> 
        $('#post-book').on('click',function(){

            var id = $('#ID_device').val();
           
            
            
            $.ajax({
                type: "POST",
                url: "structure/api_return.php",
                data: {
                    'ID_device': id,
                   
                   
                },
                success: function(data) {
                    alert(data);
                    window.location.href = "return.php";
              },
          });
        });
        
     </script>

</html>
