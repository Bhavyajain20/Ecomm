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
                <i class="fa fa-dashboard"></i>Dashboard/Insert Slider
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i>Insert Slider
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Slider Name</label>
                        <div class="col-md-6">
                            <input type="text" name="slider_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Slider Image</label>
                        <div class="col-md-6">
                            <input type="file" name="slider_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    $slider_name=$_POST['slider_name'];
    $slider_image=$_FILES['slider_image']['name'];
    $temp_name=$_FILES['slider_image']['tmp_name'];
    $view_slides="Select * from slider";
    $view_run_slides=mysqli_query($con,$view_slides);
    $count=mysqli_num_rows($view_run_slides);
    if($count<4){
        move_uploaded_file($temp_name,"slider_images/$slider_image");
        $insert_slider="insert into slider(slider_name,slider_image) values('$slider_name','$slider_image')";
        $run_slider=mysqli_query($con,$insert_slider);
        echo "<script>alert('New Slide has been inserted')</script>";
        echo "<script>window.open('index.php?view_slider','_self')</script>";
    }
    else{
        echo "<script>alert('Already four slider exists.No more can be inserted ')</script>";
    }
}
?>
<?php } ?>