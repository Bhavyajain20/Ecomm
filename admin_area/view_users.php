<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>
<div class="row">
    <div col-lg-12>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>Dashboard / View Users
            </li>
        </ol>
    </div>
</div>
<!--Row 1 Close-->
<div class="row">
    <!--Row 2 Start-->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i>View Users
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>User Email</th>
                                <th>User Phone No.</th>
                                <th>User Job</th>
                                <th>User About</th>
                                <th>Delete User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
        $i=0;
        $get_admin="Select * from admins";
        $run_admin=mysqli_query($con,$get_admin);
        while($row=mysqli_fetch_array($run_admin)){
            $admin_id=$row['admin_id'];
            $admin_name=$row['admin_name'];
            $admin_email=$row['admin_email'];
            $admin_contact=$row['admin_contact'];
            $admin_job=$row['admin_job'];
            $admin_about=$row['admin_about'];
            $i++;
            ?>
                            <tr>
                                <td><?php echo $admin_name ?></td>
                                <td><?php echo $admin_email?></td>
                                <td><?php echo $admin_contact?></td>
                                <td><?php echo $admin_job?></td>
                                <td><?php echo $admin_about?></td>
                                <td><a href="index.php?user_delete=<?php echo $admin_id?>">
                                        <i class="fa fa-trash-o"></i> Delete</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>