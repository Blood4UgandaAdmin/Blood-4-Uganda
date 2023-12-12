
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			$campName= $_POST['campName'];
			$startingDate= $_POST['startingDate'];
			$endingDate= $_POST['endingDate'];
			$tel = $_POST['phone'];
			$phoneCode = $_POST['phoneCode'];
			$email = $_POST['email'];
			$country = $_POST['country'];
			$region = $_POST['region'];
			$district = $_POST['district'];
			$plotNo = $_POST['plotNo'];
			$description = $_POST['description'];
			$messages = "Congratulations! You have successfully created new URS Branches account";
			//$username = substr($fname, 0,1)."".$lname;
			$campID="";
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
			$sqlid = "SELECT `campID` AS max FROM `camps` ORDER BY `campID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				$ncid = $row['max']; 
				$campID = intval(substr($ncid , 2)) + 1; 
						$campID = uniqid();	
						if($campID<10){
							$campID = 'C00000'.$campID;
						}
						else if($campID<100){
							$campID = 'C0000'.$campID;
						}
						else if($campID<1000){
							$campID = 'C000'.$campID;
						}
						else if($campID<10000){
							$campID = 'C00'.$campID;
						}
						else if($campID<100000){
							$campID = 'C0'.$campID;
						}
						else if($campID>1000000){
							$campID = 'C'.$campID;
						}
				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$campID', '$messages', '$id')";
			//inert into the bloodbanks table
			$sql2 = "INSERT INTO camps (campID, campName,startingDate,endingDate,phoneCode, tel, email, country, regions, district, plotNo,description,postedBy)
						VALUES
						('$campID','$campName','$phoneCode', '$startingDate', '$endingDate','$tel','$email','$country','$region','$district','$plotNo', '$description','$id')";
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			echo mysqli_error($conn);
			if($result2)

			{
				header("location:../admin/success.php?id=$id");
			}
			
			else{
				header("Location:../admin/failure.php?id=$id&error=Something went wrong. Try again!");
			}
		$conn->close();
		?>	
	</body>
</html>