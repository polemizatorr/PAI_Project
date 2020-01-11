<?php
require_once ("Controllers/BoardController.php");
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
    <link rel="stylesheet" href="/Public/CSS/Ads.css">
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
            <li class="active"><a href="?page=renderAdvertisement">Add Advertisement</a></li>
            <li class="active"><a>Logged as: <?php  if (isset($_SESSION['Username'])) print_r($_SESSION['Username'])?></a> </li>

    </div>
</nav>
<div class="container">
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
    <h2>Advertisements list:</h2><br>

        <div class="flex-container">

            <?php foreach ($Ads as $ad):?>
                 <?php foreach ($ad as $Ad):?>
            <div class="advert">
                <b>Email:<?= $Ad->getEmail();?> </b><br>
                <b>Subject:<?= $Ad->getSubject();?> </b><br>
                <b>Level: <?= $Ad->getTeachLevel();?></b><br>
                <b>Description: <?= $Ad->getDescription();?><b><br>
                        <br><br>

            </div>
                <?php endforeach ?>
            <?php endforeach ?>


        </div>

    </div>


</div>
</body>
</html>