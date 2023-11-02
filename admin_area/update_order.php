<?php
if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<?php
if(isset($_POST['order_status'])){
    $order_status=$_POST['order_status'];
    $order_id=$_GET['update_order'];
    $order_details="select * from customer_order where order_id='$order_id'";
    $run_details=mysqli_query($con,$order_details);
    while($row_orders=mysqli_fetch_array($run_details)){
$c_id=$row_orders['customer_id'];
$invoice_no=$row_orders['invoice_no'];
$product_id=$row_orders['product_id'];
$qty=$row_orders['qty'];
$size=$row_orders['size'];
$order_date=$row_orders['order_date'];
$due_amount=$row_orders['due_amount'];
        }
   


    
    $update_order="update customer_order set order_status='$order_status',customer_id='$c_id',product_id='$product_id',due_amount='$due_amount',invoice_no='$invoice_no',qty='$qty',size='$size',order_date='$order_date'  where order_id='$order_id'";
    $run_status=mysqli_query($con,$update_order);
    if($run_status){
        echo "<script>alert('Order status has been updated.')</script>";
        echo "<script>window.open('index.php?view_order','_self')</script>";
    }
}
}

?>