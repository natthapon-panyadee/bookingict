<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?ob_start();?>
<?php
require_once './dbconfig.php';
session_start();
if (isset($_POST['keyword']))
    $keyword = $_POST['keyword'];
else
    $keyword = "";
?>
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
                background-image: linear-gradient(#3280e4, #584dc3);
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
    </head>
    <body>

        <div class="auth">
            <div class="auth__header">
                <div class="auth__logo">
                    <img height="100" src="pic/logoJPG.jpg" alt="">
                </div>
            </div>
            <div class="auth__body">
                <div class="auth__form" >
                    <div class="auth__form_body">
                        <h3 class="auth__form_title">Register</h3>
                        <div>
                            <div class="form-group">
                                <label class="text-uppercase small">Student ID</label>
                                <input type="number" name="studentID" class="form-control" placeholder="Enter studen ID">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Name (ไทย)</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Surname (ไทย)</label>
                                <input type="text" name="surname" class="form-control" placeholder="Enter surname">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Major</label>
                                <select class="form-control" name="major">
                                    <option>Business IT</option>
                                    <option>Design</option>
                                    <option>Communication Arts</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Phone Number</label>
                                <input type="number" name="phonenumber" class="form-control" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase small">Confirm password</label>
                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <div class="auth__form_actions">
                        <button type="submit" name="signup" class="btn btn-primary btn-lg btn-block">
                            SIGN UP
                        </button>
                        <div class="mt-2">
                            <a href="loginict.php" class="small text-uppercase">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>

<script type="text/javascript">
    $('.auth__form_actions').on('click', function () {
        console.log('click');
        var id = $('input[name="studentID"').val();
        var user = $('input[name="name"').val();
        var sur = $('input[name="surname"').val();
        var maj = $('select[name="major"').val();
        var num = $('input[name="phonenumber"').val();
        var pass = $('input[name="password"').val();
        var conpass = $('input[name="confirmpassword"').val();
        $.ajax({
            type: "POST",
            url: "structure/api_register.php",
            data: {
                'studentID': id,
                'name': user,
                'surname': sur,
                'major': maj,
                'phonenumber': num,
                'password': pass,
                'confirmpassword': conpass
            },
            success: function (data) {
                alert(data);
                window.location.href = "loginict.php";
            },
        });
    });
</script>