<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeachUp Private Lessons</title>
    <link rel="stylesheet" href="/Public/CSS/StyleRegister.css">
    <link rel="stylesheet" href="/Public/CSS/Sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #ffe587">
<nav class="navbar navbar-inverse">

    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="?page=login" >TeachUp Private Lessons</a>
        </div>

        <ul class="nav navbar-nav">
            <li class="active"><a href="?page=HomePage">Home</a></li>
            <li class="active"><a href="?page=Ads">Ads</a></li>
            <li class="active"><a href="?page=AboutUs">About us</a></li>
            <li class="active"><a href="?page=contact">Contact</a></li>
        </ul>

    </div>
</nav>
<div class="container">
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
    <h2>Register Form</h2><br>
    <form>
        <p>Username:</p>
        <input type="text" name="Username"><br>
        <p>E-mail:</p>
        <input type="email" name="Email"><br>
        <p>Password:</p>
        <input type="password" name="Password"><br>
        <p>Repeat password:</p>
        <input type="password" name="Password2"><br>
        <p>Date of birth</p>
        <input type="date" name="Birthday"><br>
        <p>Choose your Gender</p>
        <select class="browser-default custom-select">
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select><br>
        <input type="checkbox"> I accept service regulations.<br><br>

        <input type="submit" class="btn btn-success" value="Register!">
    </form>


</div>
</body>
</html>