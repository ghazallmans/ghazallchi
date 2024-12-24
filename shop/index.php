<?php
$db=mysqli_connect('localhost','root','','shop');
session_start();
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/_fonts.css">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/rtl/bootstrap.min.css">


</head>
<body dir="rtl" style="background-color: #D9AFD9;
background-image:url(asset/img/background/background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;

">
<div class="container">
<?php
if(isset($_SESSION['user'])){


?>
    <div class="row">
        <div class="col" style="height: 60px">
            <p>کاربر گرامی <?php echo $_SESSION['user']; ?> خوش آمدید</p>
            <a href="" class="btn-primary"> نمایش پروفایل</a>
        </div>
    </div>
<?php }?>
 <!--slider-->
    <div class="row" style="width: 1125px;padding-right: 15px">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/slider/slider1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/slider/slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/slider/slider3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--menu-->
    <div class="row">
        <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">منوی اصلی</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">صفحه نخست<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">فروشگاه</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ورود
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="register.php">ثبت نام</a>
                            <a class="dropdown-item" href="login.php">پنل کاربری</a>
                            <a class="dropdown-item" href="#">پنل مدیریت</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="نام محصول" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">جستجو</button>
                </form>
            </div>
        </nav>
    </div>
    </div>

    <!--container-->
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-12 col-md-9" style="height: 200px;background-color: #9d9d9d">.col-12 .col-md-8</div>
            <div class="col-6 col-md-3" style="height: 200px;background-color:#ffccff">.col-6 .col-md-4</div>
        </div>
        <div class="row">
            <div class="col-sm" style="height: 50px;background-color: #afd9ee">col-sm</div>
            <div class="col-sm" style="height: 50px; background-color: #ccccff">col-sm</div>
            <div class="col-sm" style="height: 50px; background-color: #e4606d" >col-sm</div>
        </div>
    </div>
    </div>

<script src="asset/js/jquery-2.1.1.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>