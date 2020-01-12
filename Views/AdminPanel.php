<?php
require_once ("Repository/UserRepository.php");
require_once ("Models/User/User.php");
$url = "http://$_SERVER[HTTP_HOST]/";

$Repo = new UserRepository();
$UserRole = $Repo -> getRole($_SESSION['Username']);


if ($UserRole !== 'Admin')
{
    header("Location: {$url}?page=logout");
}

?>

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
            <a class="navbar-brand" href="?page=logout" >Logout</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="?page=HomePage">Home</a></li>
            <li class="active"><a href="?page=Ads">Ads</a></li>
            <li class="active"><a href="?page=MyAds">My Ads</a></li>
            <li class="active"><a href="?page=AboutUs">About us</a></li>
            <li class="active"><a href="?page=contact">Contact</a></li>
            <li class="active"><a href="?page=renderAdvertisement">Add Advertisement</a></li>
            <li class="active"><a href="?page=AdminPanel">Admin Panel</a></li>
            <li class="active"><a>Logged as: <?php  if (isset($_SESSION['Username'])) print_r($_SESSION['Username'])?></a> </li>
        </ul>
    </div>
</nav>
<br><br>
<table class="table mt-4 text-light">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($Users[0] as $user): ?>
        <tr>
            <th scope="row"><?= $user->getID(); ?></th>
            <td><?= $user->getUsername(); ?></td>
            <td><?= $user->getName(); ?></td>
            <td><?= $user->getEmail(); ?></td>
            <td><?= $user->getRole(); ?></td>
            <td><a class="btn btn-warning" href="?page=DeleteUser"> Delete</a></td> <!-- Ajax? -->
            <!--<td><button type="button" class="btn btn-warning" onclick="?page"> Delete</button> </td> -->


        </tr>
    <?php endforeach ?>
    </tbody>
</table>


</div>
</body>
</html>