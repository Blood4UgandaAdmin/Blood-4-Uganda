
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			$fname = $_POST['fullname'];
			$tel = $_POST['phone'];
			$phoneCode = $_POST['phoneCode'];
			$email = $_POST['email'];
			$country = $_POST['country'];
			$region = $_POST['region'];
			$district = $_POST['district'];
			$plotNo = $_POST['plotNo'];
			$username = $_POST['username'];
			$messages = "Congratulations! You have successfully created new tranfusing facilities account";
			//$username = substr($fname, 0,1)."".$lname;
			$roles = "facility";	
			$FID="";
			$notificationid="";
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			$password = md5($password);
			$cpassword = md5($cpassword);
			
			// Validate password & confirm passwords.


if(strlen($password) < 8 ) {
    header("Location:../admin/failure.php?id=$id&error=Password must be at least 8 characters!");
} else {
         if ($password != $cpassword) {
                        header("Location:../admin/failure.php?id=$id&error=Passwords do not match!");
                    } else {
                        // Generate the validating username and email
                        $sql="select * from users where (username='$username' or email='$email');";
                        $res=mysqli_query($conn,$sql);
                      
                        if (mysqli_num_rows($res) > 0) {
                            $row = mysqli_fetch_assoc($res);
                            if($email == isset($row['email'])) {
                                header("Location:../admin/failure.php?id=$id&error=email already exists");
                            }
                            if($username == isset($row['username'])) {
                                header("Location:../admin/failure.php?id=$id&error=username already exists");
                            }
                        } else {
			
                        // Generate the validating username and email
                        $sql="select * from users where (username='$username' or email='$email');";
                        $res=mysqli_query($conn,$sql);
                      
                        if (mysqli_num_rows($res) > 0) {
                            $row = mysqli_fetch_assoc($res);
                            if($email == isset($row['email'])) {
                                header("Location:../admin/failure.php?id=$id&error=email already exists");
                            }
                            if($username == isset($row['username'])) {
                                header("Location:../admin/failure.php?id=$id&error=username already exists");
                            }
                        } else {
			
			
				$sql="select * from users where (username='$username' or email='$email');";

				$res=mysqli_query($conn,$sql);
		  
				if (mysqli_num_rows($res) > 0) {
				  
				  $row = mysqli_fetch_assoc($res);
				  if($email==isset($row['email']))
				  {
					header("Location:../admin/failure.php.php?id=$id&error=Email already exists");
						  echo "";
				  }
				  if($username==isset($row['username']))
				  {
					header("Location:../admin/failure.php?id=$id&error=username  already exists");
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
			$sqlid = "SELECT `URSID` AS max FROM `urs` ORDER BY `URSID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				$nuserid = $row['max']; 
				$FID = intval(substr($nuserid , 2)) + 1; 
						$FID = uniqid();	
						if($FID<10){
							$FID = 'F000'.$FID;
						}
						else if($FID<100){
							$FID = 'F00'.$URSID;
						}
						else if($FID<1000){
							$URSID = 'F0'.$FID;
						}
						else if($FID>10000){
							$FID = 'F'.$FID;
						}
			

				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$FID', '$messages', '$id')";
			//insert into the users table
			$sql2 = "INSERT INTO users (userID, password, username,email, roles) 
						VALUES 
						('$FID','$password','$username','$email','$roles')";
						
			//inert into the bloodbanks table
			$sql3 = "INSERT INTO facilities (FID, fullname,phoneCode, tel, email, country, region, district, plotNo,RegisteredBy)
						VALUES
						('$FID','$fname','$phoneCode','$tel','$email','$country','$region','$district','$plotNo','$id')";
			
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			$result3 = mysqli_query($conn, $sql3); //runs the sql statement
			echo mysqli_error($conn);
			if($result3)

			{
				header("location:../admin/success.php?id=$id");
			}
			
			else{
				header("Location:../admin/failure.php?id=$id&error=Something went wrong. Try again!");
			}
		}}}}}
		$conn->close();
		?>	
	</body>
</html>