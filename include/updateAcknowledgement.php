<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); // Establish a connection to the database
			session_start();
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			$acknowledgement = $_POST['acknowledgement'];
			$messages = "Congratulations! You have successfully updated acknowledgement";
			$notificationid = "";
			
				// generate the internplacement_id
		$sqlid = "SELECT `notificationid` AS max FROM `notifications` ORDER BY `notificationid` DESC";
		$resultmax = mysqli_query($conn, $sqlid); 
		while($row = mysqli_fetch_array($resultmax)){
			$nuid = $row['max']; 
			$notificationid = intval(substr($nuid, 2)) + 1;
			
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
	

					$sql = "INSERT INTO notifications (notificationid, messages,currentUserID)
					VALUES
					('$notificationid', '$messages', '$id')";
					// Insert into the users table
					$sql2 = "UPDATE `acknowledgement` SET `acknowledgement`= '".$acknowledgement."';";
					
					$result = mysqli_query($conn, $sql);
					$result2 = mysqli_query($conn, $sql2);

					if ($result2) {
						$successMessage = "Successfully Registered";
						header("Location: ../php/acknowledgement.php?id=$id&message=$successMessage");
						
					}
		?>	
	</body>
</html>
