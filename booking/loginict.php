<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
        
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="../booking/demo.css"/>
        <link rel="stylesheet" href="../booking/footer-distributed-with-address-and-phones.css"/>
        <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="pic/favicon.ico" type="image/x-icon">
        <title></title>
        <style>
            .auth__header {
                padding: 13vh 1rem calc(11vh + 35px);
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f0f0f0;
                background: linear-gradient(45deg, rgba(38,160,231,1) 23%, rgba(32,115,176,1) 65%, rgba(29,89,145,1) 89%, rgba(27,77,131,1) 100%);
                background-size: cover;
                background-position: center center;
                position: relative;
                box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
            }
            .auth__header:before {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
            }
            .auth__logo {
                position: relative;
                z-index: 18;
                background: #fff;
                padding: 10px;
                border-radius: 50%;
                box-shadow: 0 2px 7px rgba(0, 0, 0, 0.15);
                overflow: hidden;
            }
            .auth__body {
                padding-bottom: 2rem;
            }
            .auth__form {
                min-width: 280px;
                max-width: 340px;
                margin: auto;
                margin-top: -40px;
                padding: 0 10px;
                position: relative;
                z-index: 9;
            }
            .auth__form_body {
                padding: 0.7rem 1.5rem 35px;
                border-radius: 0.5rem;
                background: #fff;
                border: 1px solid #eee;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            }
            .auth__form_title {
                font-size: 1.3rem;
                text-align: center;
                text-transform: uppercase;
                margin-bottom: 1.2rem;
            }
            .auth__form_actions {
                text-align: center;
                padding: 0 2rem;
                margin-top: -25px;
            }
            .auth__form_actions .btn {
                border-radius: 30px;
                box-shadow: 0 2px 12px rgba(50, 128, 228, 0.5);
            }
        </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="auth">
            <div class="auth__header" st>
                <div class="auth__logo">
                    <img height="220" src="pic/logoPNG.png" alt="">
                </div>
            </div>
            <div class="auth__body">
                <form method="POST" class="auth__form" autocomplete="off">
                    <div class="auth__form_body">
                        <h3 class="auth__form_title">Sign in</h3>
                        <div>
                            <div class="form-group">
                                <label class="text-uppercase small">Student ID</label>
                                <input type="number" name="studentID" id="studentID" class="form-control" placeholder="Enter studen ID">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="auth__form_actions">
                        <button type="submit" name="login" id="btn-login" class="btn btn-primary btn-lg btn-block">
                            LOGIN
                        </button>
                        <div class="mt-2">
                            <a href="registerict.php" class="small text-uppercase">
                                Register
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript">
                    $('#btn-login').on('click',function(){

                var id = $('#studentID').val();
                var pass = $('#password').val();
               
                $.ajax({
                    type: "POST",
                    url: "structure/api_login.php",
                    data: {
                        'studentID': id,
                        'password': pass,
                      
                    },
                    success: function (data) {
                        alert(data);
                        window.location.href = "home.php";
                    },
                });
            });
        </script>
    </body>
</html>
