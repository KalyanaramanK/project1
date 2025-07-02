<?php
session_start();
  include 'inc/header.php';
  include 'dbconnect.php';
  include 'inc/aloginnav.php';
  if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $s= "select * from  tbl_admin where username='$username' and password= '$password'";   
   $qu= mysqli_query($connect, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
     
	  $_SESSION['username']=$username;
      ?>
                <script language="javascript">
		alert("Redirect Admin Dashbord");
		window.location.href="alluser.php";
		</script>
		<?php
		}
		else
		{
            ?>
            <script language="javascript">
    alert("Username and Password has Wrong");
    window.location.href="admin.php?act=Wrong_username_and_password";
    </script>
    <?php
		
		}
    }

?>



<div class="register_area">
  <div style="padding:40px 0px;min-height:600px;" class="register_main container">

   

    <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      
      <div class="login_title">
        <p class="text-center">Admin Login</p>
      </div>
      <input type="text" class="form-control" name="username" placeholder="Username">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <p class="text-right clear"> <input type="submit" class="btn btn-primary loginbtn" name="login" value="Login"> </p>
    </form>
  </div>
</div>


<?php
  include 'inc/footer.php';
 ?>
