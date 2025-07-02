<?php
include("dbconnect.php");
include 'inc/header.php';
  include 'inc/navbar.php';
  include_once 'Controller/Homecontroller.php';
include("email.php");
extract($_REQUEST);
$qs=mysqli_query($connect,"select * from tbl_user where id='$ownerid'");
$rs=mysqli_fetch_array($qs);
$email=$rs['email'];
$qs1=mysqli_query($connect,"select * from tbl_rentrequest where house_id='$houseid'");
$rs1=mysqli_fetch_array($qs1);
$tenant_id=$rs1['tenant_id'];
$q=mysqli_query($connect,"select * from tbl_user where id='".$rs1['tenant_id']."'");
$row=mysqli_fetch_array($qs);
$full=Session::get('fname')." ".Session::get('lname');



            $mess1="User($full)  Have booked for your house.";

        
            $objEmail	=	new CI_Email();
            $objEmail->from('iotcloudadmin@iotcloud.co.in', "RealEstate");
            $objEmail->to("$email");
            
            //$objEmail->cc($txt_cc);
            //$objEmail->bcc($txt_bcc);
            $objEmail->subject("RealEstate- $fulln");
            $objEmail->message("$mess1");
            //send mail
                
                if ($objEmail->send())
                {	
                    ?>
                    <script>
                    window.location.href="availablehouse.php";
                    </script>
                    <?php
                }
                else
                {	
                //echo "not";
                }

		

?>
<?php
   $filepath = realpath(dirname(__FILE__));
   include $filepath.'/lib/Session.php';
   // include 'lib/Session.php';
   Session::init();
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
    <h1>Mail Sending</h1>
    <?php
  include 'inc/footer.php';
 ?>





