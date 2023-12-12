
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			
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
			$password="Donor@1234";
			
			
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
				('$notificationid','$userID', '$messages', '$id')";
			//insert into the users table
			$sql2 = "INSERT INTO users (userID, password, username,email, roles) 
						VALUES 
						('$userID','$password','$username','$email','$roles')";
						
			//inert into the students table
			$sql3 = "INSERT INTO donors (donorID, sname, fname,dob,gender, bloodGroup, phoneCode, tel, email, country, region, district, plotNo,RegisteredBy)
						VALUES
						('$userID','$sname','$fname','$dob','$gender','$bloodGroup','$phoneCode','$tel','$email','$country','$region','$district','$plotNo','$id')";
			
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
		}
		$conn->close();
		?>	
	</body>
</html>