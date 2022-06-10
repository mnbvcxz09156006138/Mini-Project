<?php
if(!isset($_SESSION['login']) && isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != '')
{
$user_id = $_COOKIE['user_id'];
$q = "SELECT * FROM users WHERE id = $user_id";
$user = mysqli_fetch_assoc(mysqli_query($con,$q));

$_SESSION['login'] = 1;
$_SESSION['user_id'] = $user['id'];
$_SESSION['name'] = $user['name'];
$_SESSION['family'] = $user['family'];
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <div class="d-flex justify-content-end">
                <a class="navbar-brand" href="home">
                    <img src="view/img/logoo.png" alt="" height="50">
                </a>
                </div>
            </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"type="button" class="btn btn-primary"href="admin-add-n">نوبت‌دهی/خدمات پزشکان </a>
                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-primary" href="admin_login"> ادمین</a>
                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-secondary btn-sm" href="login.php">ورود</a>
                </li>


                <li><a href="#"></a></li>
                <li class="nav-item">
                    <a type="button" class="btn btn-primary"href="index" >ثبت نام</a>
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="جستجو در پزشکان" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">جستجو</button>
            </form>
        </div>
    </div>
</nav>