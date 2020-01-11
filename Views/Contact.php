<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeachUp Private Lessons</title>
    <link rel="stylesheet" href="/Public/CSS/Sidebar.css">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Public/CSS/Contact.css">
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
        </ul>

    </div>
</nav>
<div class="container">
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
    <div class="contact">
    <p>
        Contact with website owner/main Administrator outside of site:<br>
        E-mail: TeachUp@gmail.com<br>
        Discord: TeachUpPrivateLessons#8204<br><br>
        Offers of collaboration or market cooperation (e.g. Advertisement cooperation)
        should be sent via e-mail with subject "Commercial offers".
        <br><br>

    </p>

        <br><br>
    </div>


</div>
</body>
</html>