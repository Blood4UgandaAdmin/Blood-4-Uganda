<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form-user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .error{padding: 5px;width: 100%;text-align: center;}
      .col-form h4{margin-left:10px}
    </style>
  </head>
  <body>
    <div class="wrapper wrapper-signup">
      <div class="title-text">
        <div class="title">SIGN UP</div>
      </div>
      
      <div class="form-container form-container-register">
        <div class="form-inner">
        <form action="include/signup.php" method="POST" class="login">
            <div class="col-form">
              <h4>Personal Info:</h4>
              <div class="col-column">
                <div class="column one">
                  
                  <div class="field username">
                      <label for="Username_">Surname</label>
                      <input type="text" name="sname" id="Username_"  required>
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
                    <label for="Email_">Date of Birth</label>
                    <input type="date" id="birthdate" name="dob" max="" required>
                    <script>
                      // Calculate the maximum date (10 years ago from the current date)
                      var currentDate = new Date();
                      var maxDate = new Date(currentDate);
                      maxDate.setFullYear(maxDate.getFullYear() - 10);
                    
                      // Format the date as "YYYY-MM-DD" (required format for the date input)
                      var formattedMaxDate = maxDate.toISOString().split('T')[0];
                    
                      // Set the max attribute of the date input
                      document.getElementById('birthdate').setAttribute('max', formattedMaxDate);
                    </script>
                </div>
                </div>
                <div class="column two">
                   <div class="field password">
                      <label for="Password_">First Name</label>
                      <input type="text" name="fname" id="Password_" required>
                  </div>
                  
                <div class="field email">
                    <label for="Email_">Blood Group</label><br>
                    <select name="bloodGroup" id="select" required>
                    <?php					
                     include('include/dbconfig.php'); 
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
                </div>
              </div>
            </div>
            <div class="col-form">
              <h4>Contact Info:</h4>
              <div class="col-column">
                <div class="column one">
                  
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
                </div>
                <div class="column two">
                  <div class="field email">
                    <label for="Email_">Email</label>
                    <input type="email" name="email" id="Email_" required>
                </div>
                </div>
              </div>
            </div>
            <div class="col-form">
              <h4>Address Info:</h4>
              <div class="col-column">
                <div class="column one">
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
                </div>
                <div class="column two">
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
                </div>
              </div>
            </div>
            <div class="col-form">
              <h4>Login Info:</h4>
              <div class="col-column">
                <div class="column one">
                  <div class="field Brief">
                    <label for="Brief_">Username</label>
                    <input type="text" name="username" id="Email_" required>
                </div>
                </div>
                <div class="column two">
                  <div class="field Brief">
                    <label for="Brief_">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                </div>
              </div>
            </div>           
            <div class="form-btn-column">
              <input type="reset" value="Reset" class="reset">
              <input type="submit" value="Submit" class="register">
            </div>
            <div class="signup-link">Already A Member? <a href="index.php">Back To Login</a></div>
        </form>         
        </div>
      </div>
    </div>
    <script src="js/cities.js"></script>
  </body>
</html>
