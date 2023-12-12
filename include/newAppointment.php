
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			$date = $_POST['date'];
			$time = $_POST['time'];
            $bloodbank = $_POST['bloodbank'];
            $remark = $_POST['remark'];
			$messages = "Congratulations! You have successfully make new appointment";
			$notificationid="";
			$AID="";
			$status="Pending";
		
			
			

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
			$sqlid = "SELECT `AID` AS max FROM `appointment` ORDER BY `AID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				$naid = $row['max']; 
				$AID = intval(substr($naid , 2)) + 1; 
						$AID = uniqid();	

				if($AID<10){
					$AID = 'AP000'.$AID;
				}
				else if($AID<100){
					$AID = 'AP00'.$AID;
				}
				else if($AID<1000){
					$AID = 'AP0'.$AID;
				}
				else if($AID>1000){
					$AID = 'AP'.$AID;
				}
			

				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$AID', '$messages', '$id')";
			
						
			//inert into the students table
			$sql2 = "INSERT INTO appointment (AID, date, time, bloodbank, remark,status, madeBy)
						VALUES
						('$AID','$date','$time','$bloodbank','$remark','$status','$id')";
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			echo mysqli_error($conn);
			
			if($result3)

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