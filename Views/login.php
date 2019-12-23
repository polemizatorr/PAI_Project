<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeachUp Private Lessons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Boogaloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/Public/CSS/Style.css">
    <link rel="stylesheet" href="/Public/CSS/Sidebar.css">


</head>
<body style="background-color: #ffe587">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="Login.php" >TeachUp Private Lessons</a>
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
    <h2>Welcome to TeachUp!<br></h2>
    <div class="logo">
        <img src="/Public/Images/TeachUp.png"/>
    </div>
    <h2>The place where students and<br>  tutors can find each other!</h2>
    <form action="?page=login" method="POST"> <!-- ??????? -->
        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <p>Username:</p>
        <input type="text" name="Username"><br>
        <p>Password:</p>
        <input type="password" name="Password"><br>
        <input type="submit" class="btn btn-success" value="Log in!">
    </form>

    <form action="?page=register" method="post">
    <div class="register">
        <br>
        <h4>No accountant yet? Register now for free!</h4>
        <input type="submit" class="btn btn-info" value="Register">
        <!--<button type="button" class="btn btn-info" >Register Now</button>-->


    </div>
    </form>

</div>
</body>
</html>