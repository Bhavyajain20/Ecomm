<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
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
                        echo "<a href='customer/my_account.php?my_order'>My Account</a>";
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
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="index.php"> Home</a>
                            </li>
                            <li class="active">
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
        <div id="content">
            <div class="container">
                <!--container start-->
                <div class="col-md-12">
                    <!--col-md-12 start-->
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>
                            Shop
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
                    <!--col-md-9 start-->
                    <?php 
            if(!isset($_GET['p_cat'])){
                if(!isset($_GET['cat_id'])){
                    echo "<div class='box'> 
                    <h1>Shop</h1>
                    <p>This theme is created by CBAYT,who are the students of BCA I.P.(P.G.)Degree College Bulandshahr</p>
                    </div>
                    ";
                }
            }
            ?>
                    <div class="row">
                        <!--row start-->
                        <?php
            if(!isset($_GET['p_cat'])){
                if(!isset($_GET['cat_id'])){
                    $per_page=6;
                    if(isset($_GET['page'])){
                        $page=$_GET['page'];
                    }
                    else{
                        $page=1;
                    }
                    $start_from=($page-1)*$per_page;
                    $get_product="select * from products order by 1 DESC LIMIT $start_from, $per_page";
                    $run_pro=mysqli_query($con,$get_product);
                    while($row=mysqli_fetch_array($run_pro)){
                        $pro_id=$row['product_id'];
                        $pro_title=$row['product_title'];
                        $pro_price=$row['product_price'];
                        $pro_img1=$row['product_img1'];
                        echo "<div class='col-md-4 col-sm-6' center-responsive'>
                        <div class='product'>
                        <a href='details.php?pro_id=$pro_id'>
                        <img src='admin_area/product_images/$pro_img1' width='252' height='380'>
                        </a>
                        <div class='text'>
                        <a href='details.php?pro_id=$pro_id'><h3>$pro_title</h3></a>
                        <p class='price'>Rs $pro_price</p>
                        <p class='buttons'>
                        <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>";
                        
        $check_product="select * from cart where  p_id='$pro_id'";
        $run_check=mysqli_query($db,$check_product);
        if(mysqli_num_rows($run_check)>0){
            echo"<a href='cart.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>
                         Go To Cart</a>";
        }
        else{
        echo" <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>
                        Add To Cart</a>";}
                        
                        echo"</p>
                        </div>
                        </div>
                        </div>";
                      
                       
                    }
                                   
            
            ?>
                    </div>
                    <!--row end-->
                    <center>
                        <ul class="pagination">
                            <?php
                    $query="select * from products";
                    $result=mysqli_query($con,$query);
                    $total_record=mysqli_num_rows($result);
                    $total_pages=ceil($total_record/$per_page);
                    echo "
                    <li><a href='shop.php?page=1'>".'First Page'."</a></li>
                    ";
                    for($i=1;$i<=$total_pages;$i++){
                        echo "
                        <li><a href='shop.php?page=".$i."'>".$i."</a></li>
                        ";  
                    };
                    echo "
                    <li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
                    ";
                    }}
                    ?>
                        </ul>
                    </center>
                    <div class="row">
                        <?php
                getPcatPro();
                getCatPro();
                ?>
                    </div>
                </div>
                <!--col-md-9 end-->
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