<?php  
 //entry.php  
 session_start(); 
 include('../include/dbconfig.php'); 
 $id = $_GET['id'];
			$_SESSION["id"] = $id;
 if(!isset($_SESSION["id"]))  
 {  
  header("Location:../index.php");  
 } 
 ?>
<?php  
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
     <span class="topDetails">Ongoing Campaigns</span> 
      </a>
    </div>

  </div>
  <div class="sidebar" id="mySidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidebar-col-top">
    <img src="../img/logo.png">
  </div>
   <a href="index.php<?php echo"?id=".$id."";?>">
    <div class="icon-details">
    <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M16 2.672l-5.331 5.331v-2.133h-4.265v6.398l-3.755 3.755 0.754 0.754 12.597-12.597 12.597 12.597 0.754-0.754-13.351-13.351zM7.47 6.937h2.132v2.132l-2.133 2.133v-4.265z" fill="#800000"> </path> <path d="M6.404 16.533v12.795h7.464v-7.464h4.265v7.464h7.464v-12.795l-9.596-9.596-9.596 9.596zM24.53 28.262h-5.331v-7.464h-6.398v7.464h-5.331v-11.287l8.53-8.53 8.53 8.53v11.287z" fill="#800000"> </path> </g></svg>
    <div class="nav-name-col">Dashboard</div>    
    </div>
    </a> 
   <a href="bloodRequest.php<?php echo"?id=".$id."";?>">
    <div class="icon-details">
      <svg fill="#900000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M415.996,351.253C414.823,289.6,378.663,235.2,340.263,177.6c-34.987-52.587-71.147-106.987-80.107-168.427 C259.303,3.947,254.716,0,249.383,0c-5.44,0.107-9.92,4.16-10.453,9.493c-6.613,61.76-40.747,117.44-73.707,171.2 c-36.16,59.093-70.293,114.773-69.227,176.32c1.6,86.08,73.067,154.987,160,154.987c0.96,0,2.027,0,2.987,0 c42.347-0.64,82.667-17.92,112.213-48.213C400.743,433.813,416.849,393.28,415.996,351.253z M355.836,448.853 c-25.6,26.24-60.587,41.28-97.28,41.813c-76.693,1.6-139.733-58.773-141.227-133.973c-1.067-55.36,31.573-108.48,66.027-164.693 c26.027-42.347,52.693-85.867,67.093-133.333c16.213,47.04,44.48,89.493,72,130.88c36.587,54.933,71.147,106.773,72.213,162.133 C395.409,387.947,381.436,422.933,355.836,448.853z"></path> <path d="M365.436,373.653c-5.653-1.493-11.52,1.92-13.013,7.573c-4.16,15.893-11.947,30.613-22.613,43.093 c-4.8,5.653-10.24,10.667-16.107,15.147c-4.693,3.52-5.653,10.24-2.133,14.933c3.52,4.693,10.24,5.653,14.933,2.133 c7.147-5.333,13.653-11.52,19.52-18.24c12.8-14.933,22.08-32.533,27.093-51.627C374.503,381.013,371.089,375.147,365.436,373.653 z"></path> </g> </g> </g> </g></svg>
    <div class="nav-name-col">Blood Request</div>    
    </div>
    </a> 
   
   <a href="campRequest.php<?php echo"?id=".$id."";?>">
    <div class="icon-details">
      <svg height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#900000;} </style> <g> <path class="st0" d="M496.771,326.221c-18.201-13.151-35.677-32.849-51.318-55.047c-23.496-33.29-42.933-72.082-56.371-102.445 c-6.726-15.181-11.966-28.274-15.516-37.527c-1.773-4.634-3.126-8.297-4.027-10.813c-0.452-1.25-0.791-2.206-1.018-2.854 c-0.221-0.633-0.324-0.926-0.324-0.926l-2.792-8.164l-8.528,1.25c-24.163,3.516-47.023,4.928-68.085,4.921 c-40.708,0.007-74.737-5.23-98.492-10.459c-11.879-2.611-21.184-5.208-27.476-7.142c-3.141-0.956-5.531-1.758-7.109-2.309 c-0.79-0.273-1.375-0.486-1.754-0.625l-0.404-0.148l-0.084-0.022l-10.544-4.053l-3.148,10.85l-0.102,0.368 c-2.295,7.958-44.217,146.209-129.078,255.369L0,370.089l300.752,52.053l2.732-1.096L512,337.24L496.771,326.221z M188.911,381.724 l-1.027-43.632c-32.874-3.464-48.446-67.485-48.446-67.485l-28.608,97.598l-73.671-12.754 c40.098-54.797,69.927-114.14,90.077-161.198c9.139-21.36,16.285-40.116,21.537-54.783 c30.164,125.312,96.144,218.35,127.53,257.377L188.911,381.724z M300.435,399.892c-22.08-25.361-108.575-132.462-139.442-281.767 c22.276,6.502,68.063,17.24,127.799,17.256c19.499,0,40.538-1.25,62.63-4.075c5.149,13.938,17.087,44.617,34.456,79.364 c11.809,23.625,26.123,49.096,42.61,72.479c12.699,17.984,26.678,34.702,41.984,48.412L300.435,399.892z"></path> </g> </g></svg>
    <div class="nav-name-col">Camp Requests</div>    
    </div>
    </a> 
   
      <a href="notification.php<?php echo"?id=".$id."";?>">
      <div class="icon-details">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C7.71983 1.25 4.25004 4.71979 4.25004 9V9.7041C4.25004 10.401 4.04375 11.0824 3.65717 11.6622L2.50856 13.3851C1.17547 15.3848 2.19318 18.1028 4.51177 18.7351C5.26738 18.9412 6.02937 19.1155 6.79578 19.2581L6.79768 19.2632C7.56667 21.3151 9.62198 22.75 12 22.75C14.378 22.75 16.4333 21.3151 17.2023 19.2632L17.2042 19.2581C17.9706 19.1155 18.7327 18.9412 19.4883 18.7351C21.8069 18.1028 22.8246 15.3848 21.4915 13.3851L20.3429 11.6622C19.9563 11.0824 19.75 10.401 19.75 9.7041V9C19.75 4.71979 16.2802 1.25 12 1.25ZM15.3764 19.537C13.1335 19.805 10.8664 19.8049 8.62349 19.5369C9.33444 20.5585 10.571 21.25 12 21.25C13.4289 21.25 14.6655 20.5585 15.3764 19.537ZM5.75004 9C5.75004 5.54822 8.54826 2.75 12 2.75C15.4518 2.75 18.25 5.54822 18.25 9V9.7041C18.25 10.6972 18.544 11.668 19.0948 12.4943L20.2434 14.2172C21.0086 15.3649 20.4245 16.925 19.0936 17.288C14.4494 18.5546 9.5507 18.5546 4.90644 17.288C3.57561 16.925 2.99147 15.3649 3.75664 14.2172L4.90524 12.4943C5.45609 11.668 5.75004 10.6972 5.75004 9.7041V9Z" fill="#800"></path> </g></svg>
      <div class="nav-name-col">Notifications</div>    
      </div>
      </a> 
      <a href="help.php<?php echo"?id=".$id."";?>">
    <div class="icon-details">
     <svg fill="#900000"  height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 442 442" xml:space="preserve" stroke="#900000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M431.706,232.827h-1.108c-3.863-17.348-17.544-31.03-34.892-34.892v-23.229C395.706,78.373,317.333,0,221,0 S46.294,78.373,46.294,174.706v23.229c-17.348,3.863-31.03,17.544-34.892,34.892h-1.108c-5.523,0-10,4.478-10,10s4.477,10,10,10 h1.108c3.962,17.796,18.257,31.735,36.242,35.173c4.159,17.647,20.027,30.827,38.926,30.827c22.056,0,40-17.944,40-40v-72 c0-22.056-17.944-39.999-40-39.999c-7.384,0-14.303,2.019-20.246,5.523C67.589,88.128,136.482,20,221,20 c84.464,0,153.325,68.042,154.674,152.191c-5.881-3.404-12.698-5.363-19.968-5.363c-22.056,0-40,17.943-40,39.999v72 c0,22.056,17.944,40,40,40c18.918,0,34.799-13.205,38.938-30.879c6.229-1.232,12.007-3.724,17.062-7.201v44.167 c0,18.786-9.134,36.63-25.72,50.244C368.827,389.243,345.999,397,321.706,397h-64.907c-2.082-15.648-9.245-25-19.726-25h-37.5 c-19.299,0-35,15.701-35,35s15.701,35,35,35h37.5c10.482,0,17.645-9.352,19.726-25h64.907c60.654,0,110-41.31,110-92.086v-72.087 c5.523,0,10-4.478,10-10S437.229,232.827,431.706,232.827z M66.57,206.827c0-11.027,8.972-19.999,20-19.999 c11.028,0,20,8.972,20,19.999v72c0,11.028-8.972,20-20,20c-11.028,0-20-8.972-20-20c0-5.522-4.477-10-10-10 c-0.047,0-0.092,0.006-0.138,0.007c-0.047,0-0.092-0.007-0.138-0.007c-14.336,0-26-11.663-26-26c0-10.9,6.744-20.248,16.276-24.106 v25.996c0,5.522,4.477,10,10,10s10-4.478,10-10V206.827z M234.938,422h-35.366c-8.271,0-15-6.729-15-15s6.729-15,15-15h35.366 c1.049,2.163,2.489,7.271,2.489,15S235.987,419.837,234.938,422z M385.706,268.827c-5.523,0-10,4.478-10,10c0,11.028-8.972,20-20,20 s-20-8.972-20-20v-72c0-11.027,8.972-19.999,20-19.999s20,8.972,20,19.999v37.89c0,5.522,4.477,10,10,10s10-4.478,10-10V218.83 c9.387,3.926,16,13.203,16,23.997C411.706,257.164,400.042,268.827,385.706,268.827z"></path> </g></svg>
    <div class="nav-name-col">Help and Support</div>    
    </div>
    </a> 
   <a href="#" id="shareButton">
    <div class="icon-details">
      <svg fill="#900000" viewBox="-2.88 -2.88 37.76 37.76" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#900000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M27 22c-1.646 0-3.103 0.8-4.013 2.028l-13.168-6.71c0.114-0.421 0.181-0.86 0.181-1.317 0-0.572-0.101-1.119-0.277-1.63l13.242-6.426c0.909 1.244 2.375 2.056 4.035 2.056 2.762 0 5-2.239 5-5s-2.238-5-5-5-5 2.239-5 5c0 0.388 0.049 0.764 0.133 1.127l-13.432 6.518c-0.915-1.009-2.231-1.646-3.7-1.646-2.761 0-5 2.239-5 5s2.239 5 5 5c1.59 0 3.004-0.744 3.92-1.902l13.222 6.739c-0.090 0.374-0.142 0.762-0.142 1.163 0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5zM27 2c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zM5 19c-1.657 0-3-1.343-3-3s1.343-3 3-3c1.657 0 3 1.344 3 3s-1.343 3-3 3zM27 30c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path> </g></svg>
    <div class="nav-name-col">Invite a Friend</div>    
    </div>
    </a> 
   <a href="editProfile.php<?php echo"?id=".$id."";?>">
    <div class="icon-details">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#900000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <div class="nav-name-col">Account</div>    
    </div>
    </a> 
   <a href="../include/logout.php<?php echo"?id=".$id."";?>">
    <div class="icon-details">
      <svg width="212px" height="212px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="#900" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#900" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <div class="nav-name-col">Logout</div>    
    </div>
    </a> 
 
</div>

<div class="content">
  <section  class="show-tab hide-nav">
    <div class="col-topbar ">
      <div class="topnav">
        <a href="camp.php<?php echo"?id=".$id."";?>" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">Ongoing Campaigns</span> 
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
                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No.</th>
                  <th>Ending On</th>
                  <th>Address</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
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
            
            <tr>
                  <td><?= $row['campName'];?></td>
                  <td><?= $row['email'];?></td>
                  <td><?= $row['phoneCode'];?> <?= $row['tel'];?></td>
                  <td><?= $row['endingDate'];?> </td>
                  <td><?= $row['country'];?>, <?= $row['regions'];?>, <?= $row['district'];?> <?= $row['plotNo'];?></td>
                  <td>
                    <div class="actionCol">
                    <a href="#" class="actionIcon">
                      <svg viewBox="-7.68 -7.68 39.36 39.36" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="39.36" height="39.36" rx="19.68" fill="#888" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="1" stroke="#ff0" stroke-width="2"></circle> <path d="M18.2265 11.3805C18.3552 11.634 18.4195 11.7607 18.4195 12C18.4195 12.2393 18.3552 12.366 18.2265 12.6195C17.6001 13.8533 15.812 16.5 12 16.5C8.18799 16.5 6.39992 13.8533 5.77348 12.6195C5.64481 12.366 5.58048 12.2393 5.58048 12C5.58048 11.7607 5.64481 11.634 5.77348 11.3805C6.39992 10.1467 8.18799 7.5 12 7.5C15.812 7.5 17.6001 10.1467 18.2265 11.3805Z" stroke="#ff0" stroke-width="2"></path> <path d="M17 4H17.2C18.9913 4 19.887 4 20.4435 4.5565C21 5.11299 21 6.00866 21 7.8V8M17 20H17.2C18.9913 20 19.887 20 20.4435 19.4435C21 18.887 21 17.9913 21 16.2V16M7 4H6.8C5.00866 4 4.11299 4 3.5565 4.5565C3 5.11299 3 6.00866 3 7.8V8M7 20H6.8C5.00866 20 4.11299 20 3.5565 19.4435C3 18.887 3 17.9913 3 16.2V16" stroke="#ff0" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    </a>
                    <a href="#" class="actionIcon" id="myBtn">
                      <svg viewBox="-7.68 -7.68 39.36 39.36" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="39.36" height="39.36" rx="19.68" fill="#0fa320" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#ff0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#ff0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </a>
                    <a href="#" class="actionIcon" id="myBtn">
                      <svg viewBox="-5.28 -5.28 34.56 34.56" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-5.28" y="-5.28" width="34.56" height="34.56" rx="17.28" fill="#f00" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 11V17" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </a>
                  </div>
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
  <a href="addAdmin.php<?php echo"?id=".$id."";?>">
<div class="plus"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 18L14 18M17 15V21M4 21C4 17.134 7.13401 14 11 14C11.695 14 12.3663 14.1013 13 14.2899M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></div>
</div>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
<script src="../js/popUp-profile.js"></script>
<script src="../js/greeting.js"></script>

<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
</body>
</html>