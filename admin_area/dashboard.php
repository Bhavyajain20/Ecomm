<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>
<div class="row">
    <!--1.row start-->
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>
<!--1 row end-->
<div class="row">
    <!-- 2.row start-->
    <div class="col-lg-3 col-md-6">
        <!--col-lg-3 col-md-6 start -->
        <div class="panel panel-primary">
            <!--panel panel-primary start-->
            <div class="panel-heading">
                <!--panel-heading-->
                <div class="row">
                    <!--panel heading  row starts-->
                    <div class="col-xs-3">
                        <!--col-xs-3 starts-->
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right">
                        <!--col-xs-9 text-right starts-->
                        <div class="huge"><?php echo $count_pro ?> </div>
                        <div>Products</div>
                    </div>
                    <!--col-xs-9 text-right ends-->
                </div>
                <!--panel-heading row ends-->
            </div>
            <!--panel-heading ends-->
            <a href="index.php?view_product">
                <div class="panel-footer">
                    <!--panel-footer starts-->
                    <span class="pull-left"> View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
                <!--panel-footer ends-->
            </a>
        </div>
        <!--panel panel-primary ends-->
    </div>
    <!--col-lg-3 col-md-6 ends-->
    <div class="col-lg-3 col-md-6">
        <!--col-lg-3 col-md-6 starts--->
        <div class="panel panel-yellow">
            <!--panel panel-yellow starts-->
            <div class="panel-heading">
                <!--panel-heading starts-->
                <div class="row">
                    <!--panel-heading row starts-->
                    <div class="col-xs-3">
                        <!--col-xs-3 starts-->
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right">
                        <!--col-xs-9 text-right starts-->
                        <div class="huge"><?php echo $count_p_cat ?></div>
                        <div>
                            Product Categories
                        </div>
                    </div>
                    <!--col-xs-9 text-right ends-->
                </div>
                <!--panel-heading row ends-->
            </div>
            <!--panel-heading ends-->
            <a href="index.php?view_product_cat">
                <div class="panel-footer">
                    <!--panel-footer starts-->
                    <span class="pull-left"> View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
                <!--panel-footer ends-->
            </a>
        </div>
        <!--panel panel-yellow ends-->
    </div>
    <!--col-lg-3 col-md-6 ends-->
    <div class="col-lg-3 col-md-6">
        <!--col-lg-3 col-md-6 starts--->
        <div class="panel panel-red">
            <!--panel panel-red starts-->
            <div class="panel-heading">
                <!--panel-heading starts-->
                <div class="row">
                    <!--panel-heading row starts-->
                    <div class="col-xs-3">
                        <!--col-xs-3 starts-->
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right">
                        <!--col-xs-9 text-right starts-->
                        <div class="huge"><?php echo $count_order ?></div>
                        <div>
                            Orders
                        </div>
                    </div>
                    <!--col-xs-9 text-right ends-->
                </div>
                <!--panel-heading row ends-->
            </div>
            <!--panel-heading ends-->
            <a href="index.php?view_order">
                <div class="panel-footer">
                    <!--panel-footer starts-->
                    <span class="pull-left"> View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
                <!--panel-footer ends-->
            </a>
        </div>
        <!--panel panel-red ends-->
    </div>
    <!--col-lg-3 col-md-6 ends-->
    <div class="col-lg-3 col-md-6">
        <!--col-lg-3 col-md-6 starts--->
        <div class="panel panel-green">
            <!--panel panel-green starts-->
            <div class="panel-heading">
                <!--panel-heading starts-->
                <div class="row">
                    <!--panel-heading row starts-->
                    <div class="col-xs-3">
                        <!--col-xs-3 starts-->
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right">
                        <!--col-xs-9 text-right starts-->
                        <div class="huge"><?php echo $count_cust ?></div>
                        <div>Customers</div>
                    </div>
                    <!--col-xs-9 text-right ends-->
                </div>
                <!--panel-heading row ends-->
            </div>
            <!--panel-heading ends-->
            <a href="index.php?view_customer">
                <div class="panel-footer">
                    <!--panel-footer starts-->
                    <span class="pull-left"> View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
                <!--panel-footer ends-->
            </a>
        </div>
        <!--panel panel-green ends-->
    </div>
    <!--col-lg-3 col-md-6 ends-->
</div>
<!--row 2 ends-->
<div class="row">
    <!---3 row starts--->
    <div class="col-lg-8">
        <!--- col-lg-8 starts--->
        <div class="panel panel-primary">
            <!---panel penel-primary starts-->
            <div class="panel-heading">
                <!---panel-heading starts-->
                <div class="panel-title">
                    <!---panel-title starts-->
                    <i class="fa fa-money fa-fw"></i>New Orders
                    </h3>
                    <!---panel-title Ends--->
                </div>
                <!---panel-heading ends--->
                <div class="panel-body">
                    <!---panel-body starts-->
                    <div class="table-responsive">
                        <!--table-reponsive starts-->
                        <table class="table table-bordered table-hover ">
                            <!--table table-bordered table-hover  started-->
                            <thead>
                                <!--- thead starts--->
                                <tr>
                                    <th>Order No:</th>
                                    <th>Customer Email:</th>
                                    <th>Invoice No:</th>
                                    <th>Product Id:</th>
                                    <th>Total:</th>
                                    <th>Date:</th>
                                    <th>Status:</th>
                                </tr>
                            </thead>
                            <!---thead ends-->
                            <tbody>
                                <!--tbody starts-->
                                <?php 
$i=0;
$get_order="select * from customer_order order by 1 DESC LIMIT 0,5";
$run_order=mysqli_query($con,$get_order);
while ($row_order=mysqli_fetch_array($run_order)){
    $order_id=$row_order['order_id'];
    $customer_id=$row_order['customer_id'];
    $product_id=$row_order['product_id'];
    $invoice_no=$row_order['invoice_no'];
    $qty=$row_order['qty'];
    $date=$row_order['order_date'];
    $status=$row_order['order_status'];
    $i++;
?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td>
                                        <?php
    $get_cust="select * from customers where customer_id='$customer_id'";
    $run_cust=mysqli_query($con,$get_cust);
    $row_customer=mysqli_fetch_array($run_cust);
    $customer_email=$row_customer['customer_email'];
    echo $customer_email;
    ?>
                                    </td>
                                    <td><?php echo $invoice_no ?></td>
                                    <td><?php echo $product_id ?></td>
                                    <td><?php echo $qty ?></td>
                                    <td><?php echo $date ?></td>
                                    <td><?php echo $status ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <!--tbody ends--->
                        </table>
                        <!--table table-bordered table-hover table-striped ends-->
                    </div>
                    <!---table-responsive ends--->
                    <div class="text-right">
                        <!---text right starts-->
                        <a href="index.php?view_orders">
                            View All Orders<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    <!---text right ends--->
                </div>
                <!---panel-body ends--->
            </div>
            <!---panel panel-primary ends--->
        </div>
        <!---col-lg-8 ends--->
        <div class="col-md-4">
            <!--- col-md-4 starts--->
            <div class="panel">
                <div class="panel-body">
                    <div class="thumb-info mb-md">
                        <div class="thumb-info-title">
                            <span class="thumb-info-inner"><?php echo $admin_name ?></span><br>
                            <span class="thumb-info-typer"><?php echo $admin_job ?></span>
                        </div>
                    </div>
                    <div class="mb-md">
                        <div class="widget-content-expanded">
                            <i class="fa fa-user"></i> <span>Email:</span> <?php echo $admin_email ?> <br>
                            <i class="fa fa-user"></i> <span>Contact:</span><?php echo $admin_contact ?> <br>
                        </div>
                        <hr class="dotted short">
                        <h5 class="text-muted"><?php echo $admin_about ?></h5>
                        <p>
                            Admin About
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>