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
    <link rel="stylesheet" href="/Public/CSS/HomePage.css">
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
    <p>TeachUp Private Lessons is a Web Application created
    for student and tutors to help them find someone to giving or taking
    private lessons. There is a possibility of creating profiles and
    defining there if you want to work as a tutor, hire a tutor or
    both of these - you can declare subjects which you're able to teach
    or those which u want to be taught and what level of subject
    are you interested in.<br><br> There's a possibility of chatting with
    users whose advertisements interested you - All that stuff totally free!
    We are not interested in getting commission for making this place for users -
     You choose the offer which is attractive for you, including the cost declared
    by a tutor, or pay offered by student.<br><br> You can discuss conditions of your
    cooperative work - the portal owners are not interested in it - that's your
    private cases. TeachUp will soon offer possibility of e-learning on our portal - it's one
    of new innovations we're currently working on to improve quality of our
    portal services.</p>

</div>
</body>
</html>