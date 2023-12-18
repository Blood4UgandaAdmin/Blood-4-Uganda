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
     <span class="topDetails">Volunteer Information</span> 
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
  <section >
    <div class="col-topbar show-tab">
      <div class="topnav">
        <a href="#news" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">New Volunteer</span> 
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
<script src="../js/shareApp.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>