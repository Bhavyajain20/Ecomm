<?php
$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
$customer_email=$row_cust['customer_email'];
$customer_contact=$row_cust['customer_contact'];
$customer_address=$row_cust['customer_address'];
?>
<div class="box">
    <center>
        <h1>Edit Your Account</h1>
    </center>
    <form action="" method="post">
        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name;?>" required="">
        </div>
        <div class="form-group">
            <label>Customer Email</label>
            <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email;?>" required="">
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="c_number" class="form-control" value="<?php echo $customer_contact;?>" required="">
        </div>
        <div class="form-group">
            <label>Customer Address</label>
            <input type="text" name="c_address" class="form-control" value="<?php echo $customer_address;?>"
                required="">
        </div>
        <div class="text-center">
            <button class="btn btn-primary" name="update" type="submit">
                Update Now
            </button>
        </div>
    </form>
</div>
<?php
if(isset($_POST['update'])){
    $update_id=$customer_id;
    $c_name=$_POST['c_name']; 
    $c_email=$_POST['c_email'];
    $c_contact=$_POST['c_number'];
    $c_address=$_POST['c_address'];
    
    $update_customer="update customers set customer_name='$c_name', customer_email='$c_email',customer_contact='$c_contact',customer_address='$c_address'";
    $run_customer=mysqli_query($con,$update_customer);
    
    if($run_customer){
        echo "<script>alert('Your details updated.')</script>";
        echo "<script>window.open('../logout.php','_self')</script>";
        
    }
}
?>