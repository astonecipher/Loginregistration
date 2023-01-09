<?php
$title = "NORUSHZONE";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- <title>complete responsive fitness and gym website design</title> -->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/login.css">



</head>
<body>
    
        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>NO</span>RUSHZONE</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#features">features</a>
        <a href="#pricing">pricing</a>
        <a href="#trainers">Shop</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

</header>

<!-- header section ends     -->

<!-- Top Social Begin -->
<div class="top-social">
    <div class="top-social-links">
        <ul>
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </div>
</div>
<!-- Top Social End -->




<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">
        <div class="swiper-pagination"></div>

    </div>

</section>


<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
        </div>

        <form action="loginvalidation.php" method="post" id ="login" class="input-group">
            <label for="username">Username</label>
            <input type="text" class="input-field" placeholder="Username"  name="username">
            <label for="password">Password</label>
            <input type="text" class="input-field" placeholder="Enter Password"  name="password">
            <input type="checkbox" class="chech-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Log in</button>
        </form>
        <form action="loginvalidation.php" method="post" id="register" class="input-group">
            <label for="username">Username</label>
            <input type="text" class="input-field" placeholder="Username"  name="username">
            <label for="email">Email</label>
            <input type="email" class="input-field" placeholder="Email"  name="email">
            <label for="password">Password</label>
            <input type="text" class="input-field" placeholder="Enter Password"  name="password">
            <label for="password">Confirm Password</label>
            <input type="text" class="input-field" placeholder="Confirm Password"  name="confirm_password">
            <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>

</div>








<script>
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";

}
function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";

}

</script>







<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>