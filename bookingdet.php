<?php
session_start();
include 'inc/header.php';
include 'inc/adminnav.php';
include("dbconnect.php");
$username=$_SESSION['username'];
extract($_REQUEST);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Real Estate Management System</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/all.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/chosen.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/slick.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/slick-theme.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/jquery-ui.theme.min.css?ver=<?php echo time();?>">
  <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time();?>">
</head>
<body>
  <div class="main">
    <!-- Page Resubmission Off -->
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>

<br><br><br><br><br>

<div class="container">
            <div class="row">
			<div class="table-responsive">
				<center>
               <form id="form1" class="" name="form1" method="post" action="">
			   <h2 align="center">Booking Details</h2>
			   <div class="col-xs-1 col-lg-12">
                <table class="table table-stripped" align="center">
                    <tr>
                        <th scope="col-xs-1">S.No</th>
                        <th scope="col-xs-1">House Number</th>
                        <th scope="col-xs-1">Customer Name</th>
                        <th scope="col-xs-1">Owner Name</th>




                    </tr>
                    <?php
			$i=0;
			$qs=mysqli_query($connect,"select * from  tbl_rentrequest");
			while($rs=mysqli_fetch_array($qs))
			{
			$i++;
			?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rs['house_id'];?></td>
                <td><?php
                 $q=mysqli_query($connect,"select * from  tbl_user where id='".$rs['tenant_id']."'");
                 $r=mysqli_fetch_array($q);
                 echo $r['fname']."".$r['lname'];
                 ?>

                </td>
                <td><?php
                 $q1=mysqli_query($connect,"select * from  tbl_user where id='".$rs['owner_id']."'");
                 $r1=mysqli_fetch_array($q1);
                 echo $r1['fname']."".$r1['lname'];
                 ?>

                </td>
                
            </td>
				

                
            </tr>
            <?php
			}
			?>
                </table>
				</div>

               </form>
			   </center>
		</div>

		</div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
<footer>
  <div class="footer_main container">
    <p class="text-center">Copyright 2023 by Real Estate Admins. All Rights Reserved.</p>
  </div>
</footer>



</div>

<script src="assets/js/jquery.min.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/proper.min.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/bootstrap.min.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/chosen.jquery.min.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/slick.min.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/jquery-ui.min.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/main.js?ver=<?php echo time();?>" charset="utf-8"></script>
<script src="assets/js/myplugins.js?ver=<?php echo time();?>" charset="utf-8"></script>
</body>
</html>

