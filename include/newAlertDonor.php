
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			session_start(); 
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			$alertType = $_POST['alertType'];
			$messages = "Thank you for your Alert meassage! Your courage contributes to a transparent and ethical environment. We appreciate your commitment to upholding integrity within our organization";	
			$alertID="";
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

			//generate f_supervisor_id
			$sqlid = "SELECT `alertID` AS max FROM `alert` ORDER BY `alertID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				
				 $aid = $row['max']; 
			$alertID = intval(substr($aid, 2)) + 1;
			$alertID = uniqid();

				if($alertID<10){
					$alertID = 'AL00000000'.$alertID;
				}
				else if($alertID<100){
					$alertID = 'AL0000000'.$alertID;
				}
				else if($alertID<1000){
					$alertID = 'AL000000'.$alertID;
				}
				else if($alertID>10000){
					$alertID = 'AL00000'.$alertID;
				}
			
				else if($alertID<100000){
					$alertID = 'AL0000'.$alertID;
				}
				else if($alertID>1000000){
					$alertID = 'AL000'.$alertID;
				}
			
				else if($alertID<10000000){
					$alertID = 'AL00'.$alertID;
				}
				else if($alertID>100000000){
					$alertID = 'AL0'.$alertID;
				}
				else if($alertID>1000000000){
					$alertID = 'AL'.$alertID;
				}
			

				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$alertID', '$messages', '$id')";
			//insert into the users table
			$sql2 = "INSERT INTO alert (alertID, alertType,explanation,alertedBy) 
						VALUES 
						('$alertID','$alertType','$explanation','$id')";
						
			
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			
			echo mysqli_error($conn);
			
				
			if($result2)

			{
				header("location:../donor/success.php");
			}
			
			else{
				header("Location:../donor/failure.php");
			}
		?>	
	</body>
</html>