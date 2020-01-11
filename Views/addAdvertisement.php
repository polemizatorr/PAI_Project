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
    <link rel="stylesheet" href="/Public/CSS/Style.css">
    <link rel="stylesheet" href="/Public/CSS/Sidebar.css">
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
    <h4>Fill the form below to add Advetrisement.<br><br></h4> <!--- here form to create Adv -->
    <form id="Adv" method="post" action="?page=addAdvertisement">
        Insert subject:<br>
        <input type="text" name="Subject"><br>
        Insert your skill level(Basic, mid, advanced):<br>
        <input type="text" name="TeachLevel"><br>
        <p>Add description to your Adv:</p>
        <textarea rows="8" cols="50" name="Description" form="Adv">

        </textarea><br>
        <input type="submit" class="btn btn-success" value="Add Advert">

    </form>

    <br><br>



</div>
</body>
</html>