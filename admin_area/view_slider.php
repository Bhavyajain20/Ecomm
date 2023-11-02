<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>Dashboard / View Sliders
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i>View Sliders
                </h3>
            </div>
            <div class="panel-body">
                <?php
    $get_slides="select * from slider";
    $run_slides=mysqli_query($con,$get_slides);
    while($row_slides=mysqli_fetch_array($run_slides)){
        $slider_id=$row_slides['id'];
        $slider_name=$row_slides['slider_name'];
        $slider_image=$row_slides['slider_image'];
        ?>
                <div class="col-lg-3 col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center">
                                <?php echo $slider_name;?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <img src="slider_images/<?php echo $slider_image;?>" class="img-responsive">
                        </div>
                        <div class="panel-footer">
                            <center>
                                <a href="index.php?delete_slider=<?php echo $slider_id;?>" class="pull-left">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>

                                <div class="clearfix">
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>