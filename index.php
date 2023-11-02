<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>E Commerce Store </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="top">
        <!--Top Bar Start-->
        <div class="container">
            <!--container Start-->
            <div class="col-md-6 offer">
                <!--col-md-6 offer-->
                <a href="#" class="btn btn-success btn-sm">
                    <?php
                if(!isset($_SESSION['customer_email'])){
                    echo "Welcome Guest";
                }else{
                    echo "Welcome: ".$_SESSION['customer_email']."";
                }
                ?>
                </a>
                <a href="#">Shopping Cart Total Price: Rs <?php totalPrice();?>, Total Items <?php item();?></a>
            </div>
            <!--col-md-6 offer-->
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php"> Register</a>
                    </li>
                    <li>
                        <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='checkout.php'>My Account</a>";
                    } else{
                        echo "<a href='customer/my_account.php?my_order.php'>My Account</a>";
                    }
                    ?>
                    </li>
                    <li>
                        <a href="cart.php"> Go to Cart</a>
                    </li>
                    <li>
                        <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='checkout.php'>Login</a>";
                    }else{
                        echo "<a href='logout.php'>Logout</a>";
                    }
                    ?>
                    </li>
                </ul>
            </div>
            <!--container End-->
        </div>
        <!--Top Bar End-->
        <div class="navbar navbar-default" id="navbar">
            <!--navbar default start-->
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand home" href="index.php">
                        <img src="images/4.jpg" alt="online shopping" class="hidden-xs" width="115" height="100">

                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only"> Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navigation">
                    <!--navbar collapse system start-->
                    <div class="padding-nav">
                        <!--padding-nav-start-->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="index.php"> Home</a>
                            </li>
                            <li>
                                <a href="shop.php"> Shop</a>
                            </li>
                            <li>
                                <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='checkout.php'>My Account</a>";
                    } else{
                        echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                    }
                    ?>
                            </li>
                            <li>
                                <a href="cart.php"> Shopping Cart</a>
                            </li>
                            <li>
                                <a href="contactus.php"> Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!--padding-nav-end-->
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping cart"></i>
                        <span><?php item();?> items in cart</span>
                    </a>
                    <div class="navbar-collapse collapse-right">
                        <button class="btn navbar-btn btn-primary" type="button" data toggle="collapse"
                            data-target="#search">
                            <span class="sr-only"> Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <!--navbar collapse collapse right end-->
                    <div class="collapse clearfix" id="search">
                        <form class="navbar-form" method="get" action="result.php">
                            <div class="input-group">
                                <input type="text" name="user_query" placeholder="Search" class="form-control"
                                    required="">
                                <span class="Input-group-btn">
                                    <button type="submit" value="Search" name="search" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="slider">
            <!--container start-->
            <div class="col-md-12">
                <!--col-md-2 start-->
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    <!---carousel slider star--->
                    <ol class="carousel-indicators">
                        <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="myCarousel" data-slide-to="1"></li>
                        <li data-target="myCarousel" data-slide-to="2"></li>
                        <li data-target="myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <!--carousel inner start-->
                        <?php
                    $get_slider= "select * from slider LIMIT 0,1";
                    $run_slider= mysqli_query($con,$get_slider);
                    while ($row=mysqli_fetch_array($run_slider)) {
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        echo "<div class='item active'>
                        <img src='admin_area/slider_images/$slider_image' width='1168' height='400'>
                        </div>
                        ";
                    }    
                    ?>
                        <?php
                    $get_slider="select * from slider LIMIT 1,3";
                    $run_slider= mysqli_query($con,$get_slider);
                    while ($row=mysqli_fetch_array($run_slider)) {
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        echo "
                        <div class='item'>
                        <img src='admin_area/slider_images/$slider_image' width='1168' height='539'>
                        </div>
                        ";
                    }    
                    ?>
                    </div>
                    <!--carousel-inner End-->
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--container end-->
        <div id="advantage">
            <!--advantage strt--->
            <div class="container">
                <!--container strt--->
                <div class="same-height-row">
                    <!--same-height-row start-->
                    <div class="col-sm-4">
                        <!--col-sm-4 start-->
                        <div class="box same-height">
                            <!--box same-height start-->
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h3><a href="#"> BEST PRICES</h3>
                            <p>You can check on all others sites about the prices about the prices and than
                                compare with us.</p>
                        </div>
                        <!--box same-height end-->
                    </div>
                    <!--col-sm-4-->
                    <div class="col-sm-4">
                        <!--col-sm-4 start-->
                        <div class="box same-height">
                            <!--box same-height start-->
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h3><a href="#"> 100% SATISFACTION GUARANTEED FROM BSR.</h3>
                            <p>Free returns on everything for three months.</p>
                        </div>
                        <!--box same-height end-->
                    </div>
                    <!--col-sm-4-->
                    <div class="col-sm-4">
                        <!--col-sm-4 start-->
                        <div class="box same-height">
                            <!--box same-height start-->
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h3><a href="#">WE LOVE OUR CUSTOMERS</h3>
                            <p>We are known to provide best possible service ever.</p>
                        </div>
                        <!--box same-height end-->
                    </div>
                    <!--col-sm-4-->
                </div>
                <!--same-height-row end-->
            </div>
            <!--container end--->
        </div>
        <!--advantage end--->
    </div>
    <div id="hot">
        <!--hot start-->
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Latest this week</h2>
                </div>
            </div>
        </div>
    </div>
    <!--hot end-->
    <div id="content" class="container">
        <div class="row">
            <?php
        getPro();
        ?>
        </div>
    </div>

    <!--FOOTER START-->
    <?php
    include("includes/footer.php");
    ?>
    <!--FOOTER End-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
</body>

</html>