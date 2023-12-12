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
      <a href="#news" class="topAction-mobile">
        <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#fff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
      </a>
      <a href="#news" class="topAction-mobile">
     <span class="topDetails">Admin Information</span> 
      </a>
    </div>

  </div>
<div class="sidebar" id="mySidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidebar-col-top">
    <img src="../img/logo.png">
  </div>
   <a href="#">
    <div class="icon-details">
    <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M16 2.672l-5.331 5.331v-2.133h-4.265v6.398l-3.755 3.755 0.754 0.754 12.597-12.597 12.597 12.597 0.754-0.754-13.351-13.351zM7.47 6.937h2.132v2.132l-2.133 2.133v-4.265z" fill="#800000"> </path> <path d="M6.404 16.533v12.795h7.464v-7.464h4.265v7.464h7.464v-12.795l-9.596-9.596-9.596 9.596zM24.53 28.262h-5.331v-7.464h-6.398v7.464h-5.331v-11.287l8.53-8.53 8.53 8.53v11.287z" fill="#800000"> </path> </g></svg>
    <div class="nav-name-col">Dashboard</div>    
    </div>
    </a> 
   <a href="#">
    <div class="icon-details">
      <svg fill="#900000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M415.996,351.253C414.823,289.6,378.663,235.2,340.263,177.6c-34.987-52.587-71.147-106.987-80.107-168.427 C259.303,3.947,254.716,0,249.383,0c-5.44,0.107-9.92,4.16-10.453,9.493c-6.613,61.76-40.747,117.44-73.707,171.2 c-36.16,59.093-70.293,114.773-69.227,176.32c1.6,86.08,73.067,154.987,160,154.987c0.96,0,2.027,0,2.987,0 c42.347-0.64,82.667-17.92,112.213-48.213C400.743,433.813,416.849,393.28,415.996,351.253z M355.836,448.853 c-25.6,26.24-60.587,41.28-97.28,41.813c-76.693,1.6-139.733-58.773-141.227-133.973c-1.067-55.36,31.573-108.48,66.027-164.693 c26.027-42.347,52.693-85.867,67.093-133.333c16.213,47.04,44.48,89.493,72,130.88c36.587,54.933,71.147,106.773,72.213,162.133 C395.409,387.947,381.436,422.933,355.836,448.853z"></path> <path d="M365.436,373.653c-5.653-1.493-11.52,1.92-13.013,7.573c-4.16,15.893-11.947,30.613-22.613,43.093 c-4.8,5.653-10.24,10.667-16.107,15.147c-4.693,3.52-5.653,10.24-2.133,14.933c3.52,4.693,10.24,5.653,14.933,2.133 c7.147-5.333,13.653-11.52,19.52-18.24c12.8-14.933,22.08-32.533,27.093-51.627C374.503,381.013,371.089,375.147,365.436,373.653 z"></path> </g> </g> </g> </g></svg>
    <div class="nav-name-col">Blood Request</div>    
    </div>
    </a> 
   
   <a href="#">
    <div class="icon-details">
      <svg height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#900000;} </style> <g> <path class="st0" d="M496.771,326.221c-18.201-13.151-35.677-32.849-51.318-55.047c-23.496-33.29-42.933-72.082-56.371-102.445 c-6.726-15.181-11.966-28.274-15.516-37.527c-1.773-4.634-3.126-8.297-4.027-10.813c-0.452-1.25-0.791-2.206-1.018-2.854 c-0.221-0.633-0.324-0.926-0.324-0.926l-2.792-8.164l-8.528,1.25c-24.163,3.516-47.023,4.928-68.085,4.921 c-40.708,0.007-74.737-5.23-98.492-10.459c-11.879-2.611-21.184-5.208-27.476-7.142c-3.141-0.956-5.531-1.758-7.109-2.309 c-0.79-0.273-1.375-0.486-1.754-0.625l-0.404-0.148l-0.084-0.022l-10.544-4.053l-3.148,10.85l-0.102,0.368 c-2.295,7.958-44.217,146.209-129.078,255.369L0,370.089l300.752,52.053l2.732-1.096L512,337.24L496.771,326.221z M188.911,381.724 l-1.027-43.632c-32.874-3.464-48.446-67.485-48.446-67.485l-28.608,97.598l-73.671-12.754 c40.098-54.797,69.927-114.14,90.077-161.198c9.139-21.36,16.285-40.116,21.537-54.783 c30.164,125.312,96.144,218.35,127.53,257.377L188.911,381.724z M300.435,399.892c-22.08-25.361-108.575-132.462-139.442-281.767 c22.276,6.502,68.063,17.24,127.799,17.256c19.499,0,40.538-1.25,62.63-4.075c5.149,13.938,17.087,44.617,34.456,79.364 c11.809,23.625,26.123,49.096,42.61,72.479c12.699,17.984,26.678,34.702,41.984,48.412L300.435,399.892z"></path> </g> </g></svg>
    <div class="nav-name-col">Camp Requests</div>    
    </div>
    </a> 
    <a href="#">
      <div class="icon-details">
        <svg viewBox="0 0 48.00 48.00" xmlns="http://www.w3.org/2000/svg" fill="#900000" stroke="#900000" stroke-width="0.00000000000000000007"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>information-circle</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2Zm0,40A18,18,0,1,1,42,24,18.1,18.1,0,0,1,24,42Z"></path> <path d="M24,20a2,2,0,0,0-2,2V34a2,2,0,0,0,4,0V22A2,2,0,0,0,24,20Z"></path> <circle cx="24" cy="14" r="2"></circle> </g> </g> </g></svg>
      <div class="nav-name-col">Acknowledgment</div>    
      </div>
      </a> 
    <a href="#">
      <div class="icon-details">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C7.71983 1.25 4.25004 4.71979 4.25004 9V9.7041C4.25004 10.401 4.04375 11.0824 3.65717 11.6622L2.50856 13.3851C1.17547 15.3848 2.19318 18.1028 4.51177 18.7351C5.26738 18.9412 6.02937 19.1155 6.79578 19.2581L6.79768 19.2632C7.56667 21.3151 9.62198 22.75 12 22.75C14.378 22.75 16.4333 21.3151 17.2023 19.2632L17.2042 19.2581C17.9706 19.1155 18.7327 18.9412 19.4883 18.7351C21.8069 18.1028 22.8246 15.3848 21.4915 13.3851L20.3429 11.6622C19.9563 11.0824 19.75 10.401 19.75 9.7041V9C19.75 4.71979 16.2802 1.25 12 1.25ZM15.3764 19.537C13.1335 19.805 10.8664 19.8049 8.62349 19.5369C9.33444 20.5585 10.571 21.25 12 21.25C13.4289 21.25 14.6655 20.5585 15.3764 19.537ZM5.75004 9C5.75004 5.54822 8.54826 2.75 12 2.75C15.4518 2.75 18.25 5.54822 18.25 9V9.7041C18.25 10.6972 18.544 11.668 19.0948 12.4943L20.2434 14.2172C21.0086 15.3649 20.4245 16.925 19.0936 17.288C14.4494 18.5546 9.5507 18.5546 4.90644 17.288C3.57561 16.925 2.99147 15.3649 3.75664 14.2172L4.90524 12.4943C5.45609 11.668 5.75004 10.6972 5.75004 9.7041V9Z" fill="#800"></path> </g></svg>
      <div class="nav-name-col">Notifications</div>    
      </div>
      </a> 
   <a href="#">
    <div class="icon-details">
     <svg fill="#900000"  height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 442 442" xml:space="preserve" stroke="#900000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M431.706,232.827h-1.108c-3.863-17.348-17.544-31.03-34.892-34.892v-23.229C395.706,78.373,317.333,0,221,0 S46.294,78.373,46.294,174.706v23.229c-17.348,3.863-31.03,17.544-34.892,34.892h-1.108c-5.523,0-10,4.478-10,10s4.477,10,10,10 h1.108c3.962,17.796,18.257,31.735,36.242,35.173c4.159,17.647,20.027,30.827,38.926,30.827c22.056,0,40-17.944,40-40v-72 c0-22.056-17.944-39.999-40-39.999c-7.384,0-14.303,2.019-20.246,5.523C67.589,88.128,136.482,20,221,20 c84.464,0,153.325,68.042,154.674,152.191c-5.881-3.404-12.698-5.363-19.968-5.363c-22.056,0-40,17.943-40,39.999v72 c0,22.056,17.944,40,40,40c18.918,0,34.799-13.205,38.938-30.879c6.229-1.232,12.007-3.724,17.062-7.201v44.167 c0,18.786-9.134,36.63-25.72,50.244C368.827,389.243,345.999,397,321.706,397h-64.907c-2.082-15.648-9.245-25-19.726-25h-37.5 c-19.299,0-35,15.701-35,35s15.701,35,35,35h37.5c10.482,0,17.645-9.352,19.726-25h64.907c60.654,0,110-41.31,110-92.086v-72.087 c5.523,0,10-4.478,10-10S437.229,232.827,431.706,232.827z M66.57,206.827c0-11.027,8.972-19.999,20-19.999 c11.028,0,20,8.972,20,19.999v72c0,11.028-8.972,20-20,20c-11.028,0-20-8.972-20-20c0-5.522-4.477-10-10-10 c-0.047,0-0.092,0.006-0.138,0.007c-0.047,0-0.092-0.007-0.138-0.007c-14.336,0-26-11.663-26-26c0-10.9,6.744-20.248,16.276-24.106 v25.996c0,5.522,4.477,10,10,10s10-4.478,10-10V206.827z M234.938,422h-35.366c-8.271,0-15-6.729-15-15s6.729-15,15-15h35.366 c1.049,2.163,2.489,7.271,2.489,15S235.987,419.837,234.938,422z M385.706,268.827c-5.523,0-10,4.478-10,10c0,11.028-8.972,20-20,20 s-20-8.972-20-20v-72c0-11.027,8.972-19.999,20-19.999s20,8.972,20,19.999v37.89c0,5.522,4.477,10,10,10s10-4.478,10-10V218.83 c9.387,3.926,16,13.203,16,23.997C411.706,257.164,400.042,268.827,385.706,268.827z"></path> </g></svg>
    <div class="nav-name-col">Help and Support</div>    
    </div>
    </a> 
   <a href="#">
    <div class="icon-details">
      <svg fill="#900000" viewBox="-2.88 -2.88 37.76 37.76" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#900000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M27 22c-1.646 0-3.103 0.8-4.013 2.028l-13.168-6.71c0.114-0.421 0.181-0.86 0.181-1.317 0-0.572-0.101-1.119-0.277-1.63l13.242-6.426c0.909 1.244 2.375 2.056 4.035 2.056 2.762 0 5-2.239 5-5s-2.238-5-5-5-5 2.239-5 5c0 0.388 0.049 0.764 0.133 1.127l-13.432 6.518c-0.915-1.009-2.231-1.646-3.7-1.646-2.761 0-5 2.239-5 5s2.239 5 5 5c1.59 0 3.004-0.744 3.92-1.902l13.222 6.739c-0.090 0.374-0.142 0.762-0.142 1.163 0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5zM27 2c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zM5 19c-1.657 0-3-1.343-3-3s1.343-3 3-3c1.657 0 3 1.344 3 3s-1.343 3-3 3zM27 30c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path> </g></svg>
    <div class="nav-name-col">Invite a Friend</div>    
    </div>
    </a> 
   <a href="#">
    <div class="icon-details">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#900000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <div class="nav-name-col">Account</div>    
    </div>
    </a> 
   <a href="#">
    <div class="icon-details">
      <svg width="212px" height="212px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="#900" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#900" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <div class="nav-name-col">Logout</div>    
    </div>
    </a> 
 
</div>

<div class="content">
  <section >
    <div class="col-topbar show-tab">
      <div class="topnav">
        <a href="#news" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">New Admin</span> 
        </a>
      </div>

    </div>
    
  </section>

  <!--section body -->
  <section>
    <div class="col-body ">
      <div class="col-table">
        <div class="container container-form">
        <form id="regForm" action="../include/newAdmin.php<?php echo "?id=".$id."";?>" method="POST">
              <div class="column one">
                <h4>Personal Info:</h4>
                  <div class="field username">
                      <label for="Username_">Surname</label>
                      <input type="text" name="sname" id="Username_"  required>
                  </div>
                  <div class="field password">
                      <label for="Password_">First Name</label>
                      <input type="text" name="fname" id="Password_" required>
                  </div>
                  <div class="field email">
                      <label for="Email_">Date of Birth</label>
                      <input type="date" id="birthdate" name="dob" max="" required>
                      <script>
                        // Calculate the maximum date (18 years ago from the current date)
                        var currentDate = new Date();
                        var maxDate = new Date(currentDate);
                        maxDate.setFullYear(maxDate.getFullYear() - 18);
                      
                        // Format the date as "YYYY-MM-DD" (required format for the date input)
                        var formattedMaxDate = maxDate.toISOString().split('T')[0];
                      
                        // Set the max attribute of the date input
                        document.getElementById('birthdate').setAttribute('max', formattedMaxDate);
                      </script>
                  </div>
                  <div class="field email">
                      <label for="Email_">Gender</label><br>
                      <select name="gender" id="select" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                        </select>
                  </div>
                  <div class="field email">
                      <label for="Email_">Blood Group</label><br>
                      <select name="bloodGroup" id="select" required>
                      <?php					
						$sql = "SELECT * FROM `bloodgroup`";
						$result = mysqli_query($conn,$sql);
						
						while($row = mysqli_fetch_array($result)){
							$name = $row['bloodGroupName'];
							$BID = $row['bloodID'];
							
							echo "<option value=\"$BID\" class=\"mail-user\">".$name."</option>";
						}
					?>
                           </select>
                  </div>
                  <h4>Contact Info:</h4>
                  <div class="field phone">
                    <label for="Phone_">phone</label>
                    <div class="phone-con" style="padding: 10px;">
                      <div class="phone-code">
                         <select name="phoneCode" id="select" required style="background-color: transparent;">
                            <option data-countryCode="UG" value="+256">+256</option>
                          <option data-countryCode="DZ" value="+213">+213</option>
              
                          </select>
                      </div>
                      <div class="phone-number">
                         <input type="tel" placeholder="7000000000" name="phone" required  style="background-color: transparent;">
                      </div>
                   </div>
                </div>
                  <div class="field email">
                      <label for="Email_">Email</label>
                      <input type="email" name="email" id="Email_" required>
                  </div>
              </div>
              <div class="column two">
                <h4>Address Info:</h4>
                  <div class="field phone">
                      <label for="Phone_">Country</label>
                      <select name="country" id="select" required>
                        <option value='Uganda'>Uganda</option>
                      </select>
                  </div>
                  <div class="field Brief">
                      <label for="Brief_">Region</label>
                      <select id="stateSelect" name="region" size="1" onchange="makeSubmenu(this.value)" required>
                        <option value="central">Central</option>
                        <option value="eastern">Eastern</option>
                        <option value="northern">Northern</option>
                        <option value="western">Western</option>
                    </select>
                  </div>
                  <div class="field Brief">
                      <label for="Brief_">District</label>
                      <select id="citySelect"name="district" size="1" required>
                        <option></option>
                        </select>
                  </div>
                  <div class="field Brief">
                      <label for="Brief_">Village or TC</label>
                      <input type="text" name="plotNo" id="Email_">
                  </div>
                  <h4>Login Info:</h4>
                  <div class="field Brief">
                    <label for="Brief_">Username</label>
                    <input type="text" name="username" id="Email_" required>
                </div>
                  <div class="field Brief">
                    <label for="Brief_">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
              </div>
             
              <div class="form-btn-column">
                <input type="reset" value="Reset" class="reset">
                <input type="submit" value="Submit" class="register">
              </div>
              
             
              
          </form>
      </div>

      </div>


    </div>

  </section>
  
</div>
</div>

<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
<script src="../js/popUp-profile.js"></script>
<script src="../js/cities.js"></script>
<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
</body>
</html>