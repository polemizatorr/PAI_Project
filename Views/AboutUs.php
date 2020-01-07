<?php
$url = "http://$_SERVER[HTTP_HOST]/";
if (!isset($_SESSION['Username']))
{
    header("Location: {$url}?page=logout");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeachUp Private Lessons</title>
    <link rel="stylesheet" href="/Public/CSS/Sidebar.css">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Public/CSS/AboutUs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #ffe587">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="?page=logout" >Logout</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="?page=HomePage">Home</a></li>
            <li class="active"><a href="?page=Ads">Ads</a></li>
            <li class="active"><a href="?page=AboutUs">About us</a></li>
            <li class="active"><a href="?page=contact">Contact</a></li>
            <li class="active"><a>Logged as: <?php  if (isset($_SESSION['Username'])) print_r($_SESSION['Username'])?></a> </li>

        </ul>


    </div>
</nav>
<div class="container">
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
    <div class="contact">
        <p>
            Hi! My name is Damian and currently i am the only person working on TeachUp
            service. I am 21-year old raising developer who  mainly likes creating Web Applications
            (both frontend and backend). Below i link technologies i know, i am open for offers
            of cooperation with outside projects - mainly Web Apps.<br><br><br></p>
        <div class="flex-container">
            <div>
                <p>Technologies:<br>
                - HTML<br>
                - CSS + Bootstrap<br>
                - Javascript<br>
                - Php 5.x+<br>
                - Python 3.x<br>
                - C++<br>
                - Java<br><br>
                Tools:<br>
                - Git<br>
                - Maven<br><br>
                Database:<br>
                - SQL <br>
                - MySql <br>


                </p>
            </div>
            <div>
                <p>
                    Projects i worked on:<br>
                    -Matrix calculator (C++)<br>
                    -Solving second degree differential equation (C++)<br>
                    -Solving linear and nonlinear systems of equations (C++)<br>
                    -Solving IPC Producer and Consumer problem (C)<br>
                    -Prototype Chess App (Python + GUI Tkinter library)<br>
                    -TeachUP Web App you're lookin' at right now <br><br><br>
                    You can also check out <a href="https://github.com/polemizatorr" target="_blank"> My GitHub.</a></p>


            </div>

        </div>

    </div>


</div>
</body>
</html>