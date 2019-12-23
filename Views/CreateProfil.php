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
    <h2>Edit your profile.<br></h2>
    <form id="EditProfile">
        <p>Name:</p>
        <input type="text" name="Name"><br>
        <p>Surname:</p>
        <input type="text" name="Surname"><br>
    </form>
    <p>Your Description:</p>
    <textarea rows="8" cols="50" name="Description" form="EditProfile">
        Enter your description here...
    </textarea>


</div>
</body>
</html>