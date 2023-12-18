<?php  
include('../include/dbconfig.php');
$sql = "SELECT * FROM users ";
$results = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($results)){
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel="icon" href="../img/logo-2.png" type="image/icon type">
<link rel="stylesheet" href="../css/style.css">
<!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Data Table CSS -->
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<script>
  $(document).ready(function() {
  setTimeout(function() {
    $('#container').addClass('loaded');
    // Once the container has finished, the scroll appears
    if ($('#container').hasClass('loaded')) {
      // It is so that once the container is gone, the entire preloader section is deleted
      $('#preloader').delay(500).queue(function() {
        $(this).remove();
      });}
  }, 3000);});

</script>
<style>
  @media only screen and (max-width:500px) {
  .hide-nav{display:none}
  }
  @media only screen and (max-width: 991px) and (min-width: 551px) {
  .show-table{display:block}
  }
</style>

</head>
<body>
  	<!-- Preloader -->
		<div id="preloader">
			<div id="container" class="container-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span preloader-text="L" class="characters">L</span>
						
						<span preloader-text="O" class="characters">O</span>
						
						<span preloader-text="A" class="characters">A</span>
						
						<span preloader-text="D" class="characters">D</span>
						
						<span preloader-text="I" class="characters">I</span>
						
						<span preloader-text="N" class="characters">N</span>
						
						<span preloader-text="G" class="characters">G</span>
						
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>	
<div class="home">
  <div class="col-topbar nav-mobile hide-desktop">
    <div class="topnav">
      <a href="camp.php<?php echo"?id=".$id."";?>" class="topAction-mobile">
        <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#fff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
      </a>
      <a href="#news" class="topAction-mobile">
     <span class="topDetails">Blood Requests</span> 
      </a>
    </div>

  </div>
<div class="sidebar" id="mySidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidebar-col-top">
    <img src="../img/logo.png">
  </div>
  <?php
  include('sidebar.php')
  ?>
 
</div>

<div class="content">
  <section  class="show-tab hide-nav">
    <div class="col-topbar ">
      <div class="topnav">
        <a href="camp.php<?php echo"?id=".$id."";?>" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">Blood Requests</span> 
        </a>
      </div>

    </div>
    
  </section>

  <!--section body -->
  <section>
    <div class="col-body">
      <div class="col-table hide-app">
        <table id="example" class="table table-striped" style="width:100%">
          <thead>
              <tr>
                  <th>Facility Name</th>
                  <th>Order Type</th>
                  <th>Product Type</th>
                  <th>Unit Required</th>
                  <th>Blood Group</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
          <?php
        $sel=mysqli_query($conn,"select * FROM bloodRequest INNER JOIN facilities ON bloodRequest.FID = facilities.FID");
        // Check for query success and handle errors
      if (!$sel) {
        die("Query failed: " . mysqli_error($conn));
      }
      
      // Check if there are rows returned by the query
      if (mysqli_num_rows($sel) > 0) {
        while($row=mysqli_fetch_assoc($sel))
        {
          $requestID = $row['requestID'];
          ?> 
            
              <tr>
                  <td><?= $row['fullname'];?> </td>
                  <td><?= $row['orderType'];?></td>
                  <td><?= $row['productType'];?></td>
                  <td><?= $row['unitRequired'];?></td>
                  <td><?= $row['bloodGroup'];?></td>
                  <td>
                   <p>Pending</p>
                  </td>
              </tr>
              <?php
    }
} else {
}
?>
          </tbody>
         
      </table>

      </div>


      
      <div class="col-side-two hide-desktop show-table " style="margin-left: 0;">
      <div class="col-side-one-item item-three" style="padding: 10px;height:90vh">
       
    <div class="modal-body col-32">
    <?php
        $sel=mysqli_query($conn,"select * from camps WHERE startingDate <= CURDATE() AND endingDate >= CURDATE()");
        // Check for query success and handle errors
      if (!$sel) {
        die("Query failed: " . mysqli_error($conn));
      }
      
      // Check if there are rows returned by the query
      if (mysqli_num_rows($sel) > 0) {
        while($row=mysqli_fetch_assoc($sel))
        {
          $campID = $row['campID'];
          ?> 
      <div class="modal-icon">
        <a href="#" id="myBtn">
          <div class="icon-details">
           <div class="icon">
            <img src="../img/menu-icon/camp.png" alt="">
           </div>
          <div class="message-body-notification camp-title" >
            <div class="head-divide">
              <div class="dive-one" style="width:100%;text-align:left">
                <h5><?= $row['fname'];?> <?= $row['sname'];?></h5>
              </div>
            </div>
            
            <p style="margin-top: -5px;"><?= $row['phoneCode'];?> <?= $row['tel'];?></p>
          </div>    
          </div>
          </a> 
      </div>
      <?php
    }
} else {
    echo "<div class=\"modal-icon\" style=\"width:60%;margin-left:40%;height: fit-content;\">";
    echo "<center>";
    echo "<div class=\"icon-details\" style=\"display: block;\">";
    echo "<center>";
    echo "<div class=\"icon\">";
    echo "<img src=\"../img/menu-icon/sad.png\" alt=\"\">";
    echo "</div>";
    echo "</center>";
    echo "<div class=\"message-body-notification camp-title\" > ";
        echo "<p style=\"width:100%;\">No Record Found.</p>";
    echo "</div> ";
    echo "</div> ";
    echo "</center> ";
    echo "</div>";
}


?>
    </div>
      </div>
      </div>
    </div>
        <!--pop-up-->
    <!-- The Modal 1 Account-->
<div id="myModal" class="modal model-table">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <center>
      <div class="model-profile">
        <img src="../img/menu-icon/question.png" alt="">
      </div>
    </center>
    
    <div class="modal-body">
      <h3>Are you sure you want to delete it?</h3>
      <p>This will be deleted permanently. You cannot undo this action</p>
      <div class="modal-icon" style="padding-top: 0px;">
        <div class="col-model-btn">
          <div class="model-btn">
            <a href="">Cancel</a>
          </div>
          <div class="model-btn model-btn-2">
            <a href="">Delete</a>
          </div>
        </div>
          
      </div>
    
    </div>

  </div>
  </section>
  
</div>
</div>
  <!--FABS-->
  <div class="fabs">
  <a href="index.php<?php echo"?id=".$id."";?>">
<div class="plus">
  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 22L2 22" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 11L6.06296 7.74968M22 11L13.8741 4.49931C12.7784 3.62279 11.2216 3.62279 10.1259 4.49931L9.34398 5.12486" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M4 22V9.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 9.5V13.5M20 22V17.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393M9 22V17" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="#fff" stroke-width="1.5"></path> </g></svg>
</div>
</a>
</div>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
<script src="../js/popUp-profile.js"></script>
<script src="../js/greeting.js"></script>
<script src="../js/shareApp.js"></script>
<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>