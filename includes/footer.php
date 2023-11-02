<div id="footer">
    <div class="container">
        <div class="row"></div>
        <div class="col-md-3 col-sm-6">
            <!--col-md-3 col-sm-6 Start-->
            <h4>Pages</h4>
            <ul>
                <li><a href="./cart.php">Shopping Cart</a></li>
                <li><a href="./contactus.php">Contact</a></li>
                <li><a href="./shop.php">Shop</a></li>
                <li><a href="./customer/my_account.php">My Account</a></li>
            </ul>
            <hr>
            <h4>User Selection</h4>
            <ul>
                <li><a href="./customer/my_account.php">Login</a></li>
                <li><a href="./customer_registration.php">Register</a></li>
            </ul>
            <hr class="hidden-md hidden-1g hidden-sm">
        </div>
        <!--col-md-3 col-sm-6 End-->
        <div class="col-md-3 col-sm-6">
            <h4>Top Product Categories</h4>
            <ul>
                <?php
                    $get_p_cats="select * from product_categories";
                    $run_p_cats=mysqli_query($con,$get_p_cats);
                    while($row_p_cat=mysqli_fetch_array($run_p_cats)){
                        $p_cat_id=$row_p_cat['p_cat_id'];
                        $p_cat_title=$row_p_cat['p_cat_title'];
                        echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
                    }
                    ?>
            </ul>
            <hr class="hidden-md hidden-1g">
        </div>
        <!--col-md-3 col-sm-6 End-->
        <div class="col-md-3 col-sm-6">
            <h4>where to find us</h4>
            <p>
                <strong>OnlineShopping.com</strong>
                <br>Krishna Nagar
                <br>Bulandshahr
                <br>Uttar Pradesh
                <br>onlineshopping@gmail.com
                <br>+91 9950643254
            </p>
            <a href="contactus.php">Goto contact us page</a>
            <hr class="hidden-md hidden-1g">
        </div>
        <!--col-md-3 col-sm-6 End-->
        <div class="col-md-3 col-sm-6">
            <!--col-md-3 col-sm-6 Start-->
            <h4>Get the news</h4>
            <p class="text-muted">
                subscribe here for getting news of online bulandshahr
            </p>
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" name="email" class="form-control">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-default" value="subscribe">
                    </span>
                </div>
            </form>
            <hr>
            <h4>Stay in Touch</h4>
            <p class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </p>
        </div>
    </div>
</div>
</div>
<!---footer section end-->
<div id="container">
    <!--copyright section start-->
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; 2019 Er.CBAYT TJBKS
            </p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">
                Template By: <a href="www.onlineshopping.com">onlineshopping.com</a>
            </p>
        </div>
    </div>
</div>
<!--copyright section start-->