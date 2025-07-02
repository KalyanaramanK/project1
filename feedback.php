<?php
include("dbconnect.php");
extract($_REQUEST);
if(isset($sendmsg)){
  $rdate=date("d-m-Y");
  $i="insert into feedback(ownerid,houseid,email,name,message,rdate)value('$ownerid','$houseid','$email','$name','$message','$rdate')";
  $qry=mysqli_query($connect, $i);
if($qry)
      {
      //header("location:addhearingdate.php");
              ?>
              <script language="javascript">
  alert("Added Successfully");
  window.location.href="housedetails.php?house_id=<?php echo $house_id;?>";
  </script>
  <?php
  }
  else
  {
  echo "Could not Registered";
  }

      }
      

  

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


<div class="contact_area" id="contact">
  <div class="contact_main container">
    <?php $h='2px'; $title = 'Feedback';include 'inc/heading_title.php';?>
    <div class="contact">
      <form class="" action="" method="post">
        <table>
          <tr class="margin-10px;">
            <td>Email:</td>
            <td> <input class="form-control" type="text" name="email" value=""> </td>
          </tr>
          <tr class="margin-10px;">
            <td>Name:</td>
            <td> <input class="form-control" type="text" name="name" value=""> </td>
          </tr>
          <tr>
            <td style="vertical-align:top;">Feedback:</td>
            <td> <textarea class="form-control" name="message" rows="8" cols="80"></textarea> </td>
          </tr>
        </table>
        <input type="submit" class="btn btn-primary submit" name="sendmsg" value="Send">
      </form>
    </div>
  </div>
</div>

<div class="container">
            <div class="row">
			<div class="table-responsive">
				<center>
               <form id="form1" class="" name="form1" method="post" action="">
			   <h2 align="center">Customer Feedback </h2>
			   <div class="col-xs-1 col-lg-12">
                <table class="table table-stripped" align="center">
                    <tr>
                        <th scope="col-xs-1">S.No</th>
                        <th scope="col-xs-1">Name</th>
                        <th scope="col-xs-1">Email</th>
					             <th scope="col-xs-1">Feedback</th>
                        <th scope="col-xs-1">Date</th>


                    </tr>
                    <?php
			$i=0;
			$qs=mysqli_query($connect,"select * from feedback");
			while($rs=mysqli_fetch_array($qs))
			{
			$i++;
			?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rs['name']; ?></td>
                <td><?php echo $rs['email']; ?></td>
                <td><?php echo $rs['message']; ?></td>
				<td><?php echo $rs['rdate']; ?></td>


                
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

