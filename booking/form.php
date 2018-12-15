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

       
                
                
<?php

                require_once './dbconfig.php';
                if(isset($_GET['id'])){
                    $id = $_GET['id'];


                     $sql = "SELECT * FROM device WHERE ID_device ='$id' ";
                     if($result=$conn->query($sql)){
                            if($result->num_rows>0){
                             while($row = $result->fetch_assoc()){


?>
            <div class="container" >
                <div class="row">
                    <div class="col-6 mt-4">
                        <h3><a href="home.php"><<ย้อนกลับ</a></h3>
                        <img style='width:80%; height: auto; margin-top: 30px;' src='pic/<?php echo $row['image'] ?> '>
                    </div>
   
                    <div class="col-6 mt-4">
                        <h1>รายละเอียด</h1>
                        <div style="padding-bottom: 30px;">
                           <br>
                            <input type="hidden" class="card-title" id="ID_device" value="<?php echo $row['ID_device']?>" >
                            <h5>รหัสอุปกรณ์ : <h1> <?php echo $row['ID_device']?> </h1></h5>
                            <br>
                             <h5>ชื่ออุปกรณ์ : <h1> <?php echo $row['device_name']?> </h1></h5>
                            <br>
                            <div class="row">  
                                <div class="col-6">
                                        <h5>วันที่จอง</h5>
                                        <p> <input type="text" class="datepicker form-control" id="date_booking"></p>
                                </div>
                                <div class="col-6">
                                     <label for="exampleFormControlSelect1">เวลาจอง</label>
                                        <select class="form-control" id="time_booking">
                                              <option selected>เลือกเวลา</option>
                                              <option>8:00 น.</option>
                                              <option>8:30 น.</option>
                                              <option>9:00 น.</option>
                                              <option>9:30 น.</option>
                                              <option>10:00 น.</option>
                                              <option>10:30 น.</option>
                                              <option>11:00 น.</option>
                                              <option>11:30 น.</option>
                                              <option>12:00 น.</option>
                                              <option>12:30 น.</option>
                                              <option>13:00 น.</option>
                                              <option>13:30 น.</option>
                                              <option>14:00 น.</option>
                                              <option>14:30 น.</option>
                                              <option>15:00 น.</option>
                                              <option>15:30 น.</option>
                                              <option>16:00 น.</option>
                                              
                                      </select>
                                </div>
                                <div class="col-6">

                                     <h5>วันที่คืน</h5>
                                     <p> <input type="text" class="datepicker form-control" id="date_return"></p>
                                </div>

                                 <div class="col-6">
                                        <label for="exนpleFormControlSelect1">เวลาคืน</label>
                                        <select class="form-control" id="time_return">
                                              <option selected>เลือกเวลา</option>
                                              <option>8:00 น.</option>
                                              <option>8:30 น.</option>
                                              <option>9:00 น.</option>
                                              <option>9:30 น.</option>
                                              <option>10:00 น.</option>
                                              <option>10:30 น.</option>
                                              <option>11:00 น.</option>
                                              <option>11:30 น.</option>
                                              <option>12:00 น.</option>
                                              <option>12:30 น.</option>
                                              <option>13:00 น.</option>
                                              <option>13:30 น.</option>
                                              <option>14:00 น.</option>
                                              <option>14:30 น.</option>
                                              <option>15:00 น.</option>
                                              <option>15:30 น.</option>
                                              <option>16:00 น.</option>

                                        </select>

                                </div>
                            </div>
                            
                        </div>
                        <button id="post-book" class="form-control btn btn-primary ">จอง</button>
                        <a href="home.php">
                           <button  class="btn btn-danger form-control mt-2"> ยกเลิก</button>
                        </a>
                    </div>
                </div>
            </div>
                        <?php 
                                                }
                                              }
                                            }
                                          }
                                               ?>
                    
                   
                    
        
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
           
            var dbooking = $('#date_booking').val();
            var tbooking = $('#time_booking').val();
            var dreturn = $('#date_return').val();
            var treturn = $('#time_return').val();
            
            $.ajax({
                type: "POST",
                url: "structure/api_booking.php",
                data: {
                    'ID_device': id,
                    'date_booking': dbooking,
                    'time_booking': tbooking,
                    'date_return': dreturn,
                    'time_return': treturn
                   
                },
                success: function(data) {
                    alert(data);
                    window.location.href = "home.php";
              },
          });
        });
        
     </script>

</html>
