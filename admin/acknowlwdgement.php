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
  <?php
  include('sidebar.php')
  ?>
 
</div>

<div class="content">
  <section >
    <div class="col-topbar hide-app">
      <div class="topnav">
        <a href="#news" class="topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="topAction" style="margin-top: -10px;">
       <span class="topDetails">Acknowledgment</span> 
        </a>
      </div>

    </div>
    
  </section>
  <section >
    <div class="col-topbar tablet">
      <div class="topnav">
        <a href="#news" class="topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="topAction" style="margin-top: -10px;">
       <span class="topDetails">Acknowledgment</span> 
        </a>
      </div>

    </div>
    
  </section>

  <!--section body -->
  <section>
    <div class="col-body">
      <div class="col-table">
        <div class="container container-form">
          <form action="" id="form">
              <div class="column" style="width: 100%;">  
                <label for="Email_">Phone Number</label><br>               
                <div class="multipleSelection"> 
                  <div class="selectBox" onclick="showCheckboxes()"> 
                    <select> 
                      <option>Select options</option> 
                    </select> 
                    <div class="overSelect"></div> 
                  </div> 
            
                  <div id="checkBoxes"> 
                    <label for="selectAll"> 
                      <input type="checkbox" id="selectAll" onchange="toggleAllCheckboxes(this)" /> 
                      Select All 
                    </label> 
                    <label for="first"> 
                      <input type="checkbox" id="first" /> 
                      0789383838 
                    </label> 
                    <label for="second"> 
                      <input type="checkbox" id="second" /> 
                      0789383839
                    </label> 
                    <label for="third"> 
                      <input type="checkbox" id="third" /> 
                      0789383840
                    </label> 
                    <label for="fourth"> 
                      <input type="checkbox" id="fourth" /> 
                      0789383841
                    </label> 
                  </div> 
                </div> 
                  <div class="field email">
                      <label for="Email_">Compose Message</label><br>
                     <textarea name="message" placeholder="Type here your message..."></textarea>
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
 <!--FABS-->
 <div class="fabs">
  <a href="addAdmin.html">
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
<script src="../js/popUp-editProfile.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
<script>
   var show = true; 

function showCheckboxes() { 
  var checkboxes = document.getElementById("checkBoxes"); 

  if (show) { 
    checkboxes.style.display = "block"; 
    show = false; 
  } else { 
    checkboxes.style.display = "none"; 
    show = true; 
  } 
} 

function toggleAllCheckboxes(checkbox) {
  var checkboxes = document.querySelectorAll('#checkBoxes input[type="checkbox"]');
  checkboxes.forEach(function (cb) {
    cb.checked = checkbox.checked;
  });
}
</script>
</body>
</html>