
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			$campName= $_POST['campName'];
			$startingDate= $_POST['startDate'];
			$endingDate= $_POST['endDate'];
			$turnUp= $_POST['turnUp'];
			$offers= $_POST['offers'];
			$tel = $_POST['phone'];
			$phoneCode = $_POST['phoneCode'];
			$email = $_POST['email'];
			$country = $_POST['country'];
			$region = $_POST['region'];
			$district = $_POST['district'];
			$plotNo = $_POST['plotNo'];
			$remark = $_POST['remark'];
			
			$messages = "Congratulations! You have successfully Placed a request for the camp. Kindly wait for our responses.";
			//$username = substr($fname, 0,1)."".$lname;
			$RCID="";
			$notificationid="";	
				
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
			$sqlid = "SELECT `RCID` AS max FROM `requestCamp` ORDER BY `RCID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				$nrcid = $row['max']; 
				$RCID = intval(substr($nrcid , 2)) + 1; 
						$RCID = uniqid();	
						if($RCID<10){
							$RCID = 'RC00000'.$RCID;
						}
						else if($RCID<100){
							$RCID = 'RC0000'.$RCID;
						}
						else if($RCID<1000){
							$RCID = 'RC000'.$RCID;
						}
						else if($RCID<10000){
							$RCID = 'RC00'.$RCID;
						}
						else if($RCID<100000){
							$RCID = 'RC0'.$RCID;
						}
						else if($RCID>1000000){
							$RCID = 'RC'.$RCID;
						}
				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$RCID', '$messages', '$id')";
			//inert into the bloodbanks table
			$sql2 = "INSERT INTO requestcamp (RCID, campName,startDate,endDate,turnUp,offers,phoneCode, phone, email, country, regions, district, plotNo,remark,requestedBy)
						VALUES
						('$RCID','$campName', '$startingDate', '$endingDate','$turnUp','$offers','$phoneCode','$tel','$email','$country','$region','$district','$plotNo', '$remark','$id')";
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			echo mysqli_error($conn);
			if($result2)

			{
				header("location:../donor/success.php?id=$id");
			}
			
			else{
				header("Location:../donor/failure.php?id=$id&error=Something went wrong. Try again!");
			}
		$conn->close();
		?>	
	</body>
</html>