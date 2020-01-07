<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeachUp Private Lessons</title>
    <link rel="stylesheet" href="/Public/CSS/PasswordRemind.css">
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
            <li class="active"><a href="?page=register">Register</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
    <h3>Procedure of reminding password</h3> <br>
    <form>
        <p>Username:</p>
        <input type="text" name="Username"><br>
        <p>E-mail:</p>
        <input type="email" name="Email"><br>
        <p>Date of birth</p>
        <input type="date" name ="Date"><br>

        <input type="button" class="btn btn-success" value="Remind!">
    </form>


</div>
</body>
</html>