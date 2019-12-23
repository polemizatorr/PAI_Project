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
            <a class="navbar-brand" href="Login.php">TeachUp Private Lessons</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="HomePage.php">Home</a></li>
            <li class="active"><a href="Ads.php">Ads</a></li>
            <li class="active"><a href="AboutUs.php">About us</a></li>
            <li class="active"><a href="Contact.php">Contact</a></li>
            <li class="active"><a href="Register.php">Register</a></li>
        </ul>
        </li>
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
        To report any technical issues connected to site (like any feature which seems
        not too works or anything not to work correctly) fill the form below.<br>
    </p>
        <form id="ContactForm">
            <p>Subject:</p>
            <input type="text" name="Subject">
            <input type="submit" value="Send an issue"><br>
        </form>
        <textarea form="ContactForm" rows="8" cols="50" name="Contact">
            Describe an issue here...
        </textarea>
        <br><br>
    </div>


</div>
</body>
</html>