
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
						
			$sname = $_POST['sname'];
			$fname = $_POST['fname'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
			$tel = $_POST['phone'];
			$phoneCode = $_POST['phoneCode'];
			$email = $_POST['email'];
			$bloodGroup = $_POST['bloodGroup'];
			$country = $_POST['country'];
			$region = $_POST['region'];
			$district = $_POST['district'];
			$plotNo = $_POST['plotNo'];
			$username = $_POST['username'];
			$messages = "Congratulations! You have successfully created new donors account";
			//$username = substr($fname, 0,1)."".$lname;
			$roles = "donor";	
			$userID="";
			$notificationid="";
			$password = $_POST['password'];
			$password = md5($password);

			
			// Validate password & confirm passwords.


if(strlen($password) < 8 ) {
    header("Location:failure.php?error=Password must be at least 8 characters!");
} else {
        
                        // Generate the validating username and email
                        $sql="select * from users where (username='$username' or email='$email');";
                        $res=mysqli_query($conn,$sql);
                      
                        if (mysqli_num_rows($res) > 0) {
                            $row = mysqli_fetch_assoc($res);
                            if($email == isset($row['email'])) {
                                header("Location:failure.php?error=email already exists");
                            }
                            if($username == isset($row['username'])) {
                                header("Location:failure.php?error=username already exists");
                            }
                        } else {
			
                        // Generate the validating username and email
                        $sql="select * from users where (username='$username' or email='$email');";
                        $res=mysqli_query($conn,$sql);
                      
                        if (mysqli_num_rows($res) > 0) {
                            $row = mysqli_fetch_assoc($res);
                            if($email == isset($row['email'])) {
                                header("Location:failure.php?error=email already exists");
                            }
                            if($username == isset($row['username'])) {
                                header("Location:failure.php?error=username already exists");
                            }
                        } else {
			
				$sql="select * from users where (username='$username' or email='$email');";

				$res=mysqli_query($conn,$sql);
		  
				if (mysqli_num_rows($res) > 0) {
				  
				  $row = mysqli_fetch_assoc($res);
				  if($email==isset($row['email']))
				  {
					header("Location:failure.php?error=Email already exists");
						  echo "";
				  }
				  if($username==isset($row['username']))
				  {
					header("Location:failure.php?error=username  already exists");
				  }
				  }
		  else{
		// generate the internplacement_id
		$sqlid = "SELECT `notificationid` AS max FROM `notifications` ORDER BY `notificationid` DESC";
		$resultmax = mysqli_query($conn, $sqlid); 
		while($row = mysqli_fetch_array($resultmax)){
			$nuid = $row['max']; 
			$notificationid = intval(substr($nuid, 2)) + 1;
			//echo $placementid."<br>";
			$notificationid = uniqid();
			if($notificationid<10){
				$notificationid = 'N0000'.$notificationid;
				//echo $placementid."<br>";
			}
			else if($notificationid<100){
				$notificationid = 'N000'.$notificationid;
				//echo $placementid."<br>";
			}
			else if($notificationid<1000){
				$notificationid = 'N00'.$notificationid;
				//echo $placementid."<br>";
			}
			else if($notificationid>10000){
				$notificationid = 'N0'.$notificationid;
				//echo $placementid."<br>";
			}
			
			break;
		}

			//generate f_supervisor_id
			$sqlid = "SELECT `donorID` AS max FROM `donors` ORDER BY `donorID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				$nuserid = $row['max']; 
				$userID = intval(substr($nuserid , 2)) + 1; 
						$userID = uniqid();	
						if($userID<10){
							$userID = 'D000'.$userID;
						}
						else if($userID<100){
							$userID = 'D00'.$userID;
						}
						else if($userID<1000){
							$userID = 'D0'.$userID;
						}
						else if($userID>10000){
							$userID = 'D'.$userID;
						}
			

				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$userID', '$messages','$userID')";
			//insert into the users table
			$sql2 = "INSERT INTO users (userID, password, username,email, roles) 
						VALUES 
						('$userID','$password','$username','$email','$roles')";
						
			//inert into the students table
			$sql3 = "INSERT INTO donors (donorID, sname, fname,dob,gender, bloodGroup, phoneCode, tel, email, country, region, district, plotNo,RegisteredBy)
						VALUES
						('$userID','$sname','$fname','$dob','$gender','$bloodGroup','$phoneCode','$tel','$email','$country','$region','$district','$plotNo','$userID')";
			
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			$result3 = mysqli_query($conn, $sql3); //runs the sql statement
			echo mysqli_error($conn);
			
				
			if($result3)

			{
				header("location:../index.php");
			}
			
			else{
				header("Location:../failure.php");
			}
		}}}}
		$conn->close();
		?>	
	</body>
</html>