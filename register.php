
<?php
include_once "connection.php";
if(isset($_POST['btn'])){
    $utype=$_POST['utype'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $rdate=date("d-m-Y");
		
   
       

    $i="insert into register(id,utype,name,phone,address,username,password,rdate) values('$id','$utype','$name','$phone','$address','$username','$password','$rdate')";

    $qry=mysqli_query($con, $i);
	if($qry)
				{
				//header("location:index.php");
                ?>
                <script language="javascript">
		alert("Registered Successfully");
		window.location.href="register.php";
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
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Real Estate</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<script src='assets/google_analytics_auto.js'></script></head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
               
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<!--<div class="container">

 Header Starts
<div class="header">
<a href="index.php"><img src="images/logo.png" alt="Realestate"></a>

            <div class="menu">
              <ul class="pull-right">
              	<li><a href="index.php">Home</a></li>
                <li><a href="list-properties.php">List Properties</a>
                	 <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul>
                </li>
                
              </ul>
           </div>
</div>
</div>-->

<div class="inside-banner">
  <div class="container">
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

<form action="" method="POST">
                <select name="utype" class="form-control" id="">
                  <option value="">--Choose User Type--</option>
                  <option value="User">User</option>
                  <option value="Agent">Agent</option>

                </select>
                <input type="text" class="form-control" placeholder="Full Name" name="name">
                <input type="text" class="form-control" placeholder="Phone" name="phone">
                <textarea rows="6" class="form-control" placeholder="Address" name="address"></textarea>
                <input type="text" class="form-control" placeholder="Username" name="username">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="password" class="form-control" placeholder="Confirm Password" name="con">

      <button type="submit" class="btn btn-success" name="btn">Register</button>
          
</form>

                
        </div>
  
</div>
</div>
</div>




<div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>


  
<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                
              </ul>
            </div>
            
            
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Real Estate</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Tamilnadu <br>
<span class="glyphicon glyphicon-envelope"></span> test@gmail.com<br>
            </div>
        </div>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Username</label>
          <input type="text" class="form-control" name="username" id="exampleInputEmail2" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success" name="btn">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
</html>




  



</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
</html>



