<?php
  include 'inc/header.php';
  include 'inc/navbar.php';
  include_once 'Controller/Homecontroller.php';
 ?>



<div class="available_page_area">

<?php
  $home = new Homecontroller();
  $data = $home->gethomeDetails();
  if(!$data){
    echo "<p>No data found</p>";
  }
 ?>

 <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search_house'])) {
     $arr = explode('-',$_POST['rental_value']);
     $range1 = substr($arr[0],1);
     $range2 = substr($arr[1],2);

     $data = $home->searchHome($range1,$range2,$_POST);
   }

   if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search_cover'])) {
     $arr = explode('-',$_GET['rental_value']);
     $range1 = substr($arr[0],1);
     $range2 = substr($arr[1],2);

     $data = $home->searchHome($range1,$range2,$_GET);
   }


  ?>



  <div class="available_page_main container">

    <div class="search_house">
      <div class="search_house_inner card">
        <div class="well search_card card-body">
          <form class="search_house_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="address" class="form-control" value="<?php if(isset($_POST['address'])){
              echo $_POST['address'];
            } ?>" placeholder="City">
            <select class="form-control" style="" name="house_type">
              <option value="" selected disabled> Type</option>
              <option value="Rent"
              <?php if(isset($_POST['house_type']) && $_POST['house_type']=='Rent'){
                echo "selected";
              } ?>
              >Rent</option>
              <option value="Sales"
              <?php if(isset($_POST['house_type']) && $_POST['house_type']=='Sales'){
                echo "selected";
              } ?>
              >Sales</option>
             
             
            </select>
            <div id="range">
              <label for="input_range">Price range:</label>
              <input type="text" id="input_range" name="rental_value" readonly style="border:0; color:#f6931f; font-weight:bold;">
              <div id="main_range" class="myrange" title="Tap left or right button to set more precise value."></div>
            </div>

            <input type="submit" name="search_house" class="btn btn-info" value="Search Property">
          </form>
        </div>
      </div>
    </div>

    <div class="all_houses row">

<?php
  foreach ($data as $value) {
 ?>
      <div class="single_houses card">
        <div class="single_house_inner card-body">
          <div class="house_title">
            <p style="font-weight:600;">  <i class="fas fa-map-marker-alt"></i> <?php echo $value['address']; ?> </p>
            <p class="rent"> <i class="fas fa-money-check-alt"></i> <?php echo $value['rental_value']; ?> </p>
          </div>
          <div class="house_img">
            <img src="assets/images/house/house29.png" alt="House">
          </div>
          <a href="housedetails.php?house_id=<?php echo $value['id']; ?>">Details</a>
        </div>
      </div>

<?php } ?>

    </div>



  </div>
</div>





<?php
  include 'inc/footer.php';
 ?>

 <script>
 $(function(){
   $( "#main_range" ).slider({
         range: true,
         min: 100,
         max: 100000,
         values: [<?php if(isset($range1) && isset($range2)){
           echo $range1.','.$range2;}
           else{?> 100,100000 <?php } ?>],
         slide: function( event, ui ) {
           $( "#input_range" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
         }
    });
    $( "#input_range" ).val( "" + $( "#main_range" ).slider( "values", 0 ) +
     " - " + $( "#main_range" ).slider( "values", 1 ) );
   });
 </script>
