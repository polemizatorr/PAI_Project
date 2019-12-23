<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeachUp Private Lessons</title>
    <link rel="stylesheet" href="/Public/CSS/TopOfMonth.css">
    <link rel="stylesheet" href="/Public/CSS/Sidebar.css">
    <link href="https://fonts.googleapis.com/css?family=Boogaloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #ffe587">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="?page=logout">Logout</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="Views/HomePage.php">Home</a></li>
            <li class="active"><a href="Views/Ads.php">Ads</a></li>
            <li class="active"><a href="Views/AboutUs.php">About us</a></li>
            <li class="active"><a href="Views/Contact.php">Contact</a></li>
            <li class="active"><a href="Views/Register.php">Register</a></li>
        </ul>
        </li>
    </div>
</nav>
<div class="container">
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
            <h2>Tutor of the month!<br><br>
                Every month there's chosen a tutor with the highest TeachUp ranking
                the ranking is hidden, and no one does know exact algorithm.
                All we can say is the things that matter for the rank are:<br>
                Number of made cooperation with students, users opinion about tutor.
                </h2><br><br>
                <h2>Tutor of November:<br></h2>

    <div class="flex-container">
        <div class="advert">
            <b>Name: </b><br>
            <b>Surname: </b><br>
            <b>Age: </b><br>
            <b>Gender: </b><br>
            <b>Status: </b><br>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Subjects list
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
            </div>
        </div>

    </div>

</div>
</body>
</html>