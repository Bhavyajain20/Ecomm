<?php
session_start();
if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php','_self')</script>";
} else{
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>E Commerce Store </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a href="#">Shopping Cart Total Price:Rs <?php totalPrice();?>, Total Items <?php item();?></a>
            </div>
            <!--col-md-6 offer-->
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="../customer_registration.php"> Register</a>
                    </li>
                    <li>
                        <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='../checkout.php'>My Account</a>";
                    } else{
                        echo "<a href='my_account.php?my_order'>My Account</a>";
                    }
                    ?>
                    </li>
                    <li>
                        <a href="../cart.php"> Go to Cart</a>
                    </li>
                    <li>
                        <a href="../logout.php"> Logout</a>
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
                    <a class="navbar-brand home" href="../index.php">
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
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="../index.php"> Home</a>
                            </li>
                            <li>
                                <a href="../shop.php"> Shop</a>
                            </li>
                            <li class="active">
                                <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='../checkout.php'>My Account</a>";
                    } else{
                        echo "<a href='my_account.php?my_order'>My Account</a>";
                    }
                    ?>
                            </li>
                            <li>
                                <a href="../cart.php"> Shopping Cart</a>
                            </li>
                            <li>
                                <a href="../contactus.php"> Contact us</a>
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
        <div id="content">
            <div class="container">
                <!--container start-->
                <div class="col-md-12">
                    <!--col-md-12 start-->
                    <ul class="breadcrumb">
                        <li><a href="../index.php">Home</a></li>
                        <li>
                            My Account
                        </li>
                    </ul>
                </div>
                <!--col-md-12 end-->
                <div class="col-md-3">
                    <!--col-md-3 Start-->
                    <?php
            include("includes/sidebar.php");
        
            ?>
                </div>
                <!--col-md-3 End-->
                <div class="col-md-9">
                    <!--Including my order.php page start-->
                    <?php
            if(isset($_GET['my_order']) ){
            include("my_order.php");
            }
            ?>
                    <!--Including my order.php page end-->
                    <!--Including Payoffline.php page start-->
                    <?php
            if(isset($_GET['pay_offline'])){
            include("pay_offline.php");
            }
            ?>
                    <!--Including Payoffline.php page end-->
                    <!--Including Edit Account.php page start-->
                    <?php
            if(isset($_GET['edit_act'])){
            include("edit_act.php");
            }
            ?>
                    <!--Including Edit Account.php page end-->
                    <!--Including Change_pass.php page start-->
                    <?php
            if(isset($_GET['change_pass'])){
            include("change_password.php");
            }
            ?>
                    <!--Including Change_pass.php page end-->
                    <!--Including delete.php page start-->
                    <?php
            if(isset($_GET['delete_ac'])){
            include("delete_ac.php");
            }
            ?>
                    <!--Including logout.php page end-->
                    <?php
            if(isset($_GET['logout'])){
            include("../logout.php");
            }
            ?>
                </div>
            </div>
            <!--container end-->
        </div>
        <!--content end-->
        <!--FOOTER START-->
        <?php
    include("includes/footer.php");
    ?>
        <!--FOOTER START-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php  } ?>