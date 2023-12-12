
<html>
	<head>
	</head>
	<body>	
		<?php
			include('dbconfig.php'); //establish connection to db
			$id = $_GET['id'];
			$_SESSION["id"] = $id;
			
			$orderType = $_POST['orderType'];
			$productType = $_POST['productType'];
            $pFname= $_POST['pFname'];
            $pSname= $_POST['pSname'];
            $cFname= $_POST['cFname'];
            $cSname= $_POST['cSname'];
            $unitRequired = $_POST['unitRequired'];
            $pickUpDate = $_POST['pickUpDate'];
            $pickUpTime = $_POST['pickUpTime'];
			$tel = $_POST['phone'];
			$phoneCode = $_POST['phoneCode'];
			$email = $_POST['email'];
			$bloodGroup = $_POST['bloodGroup'];
			$bloodBank = $_POST['bloodBank'];
			$remark = $_POST['remark'];
			$messages = "Congratulations! You have successfully requested for a blood";	
			$requestID="";
			$status="Pending";
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
			$sqlid = "SELECT `requestID` AS max FROM `bloodrequest` ORDER BY `requestID` DESC";
			$resultmax = mysqli_query($conn, $sqlid); 
			//while($row = mysqli_fetch_array($resultmax)){
				$row = mysqli_fetch_array($resultmax);
				
				 $rid = $row['max']; 
			$requestID = intval(substr($rid, 2)) + 1;
			$requestID = uniqid();

				if($requestID<10){
					$requestID = 'R00000000'.$requestID;
				}
				else if($requestID<100){
					$requestID = 'R0000000'.$requestID;
				}
				else if($requestID<1000){
					$requestID = 'R000000'.$requestID;
				}
				else if($requestID>10000){
					$requestID = 'R00000'.$requestID;
				}
			
				else if($requestID<100000){
					$requestID = 'R0000'.$requestID;
				}
				else if($requestID>1000000){
					$requestID = 'R000'.$requestID;
				}
			
				else if($requestID<10000000){
					$requestID = 'R00'.$requestID;
				}
				else if($requestID>100000000){
					$requestID = 'R0'.$requestID;
				}
				else if($requestID>1000000000){
					$requestID = 'R'.$requestID;
				}
			

				$sql = "INSERT INTO notifications (notificationid,userID, messages,currentUserID)
				VALUES
				('$notificationid','$requestID', '$messages', '$id')";
			//insert into the users table
			$sql2 = "INSERT INTO careTaker (requestID, cSname,cFname, phoneCode, tel, email) 
						VALUES 
						('$requestID','$cSname', '$cFname', '$phoneCode','$tel','$email')";
						
			//inert into the students table
			$sql3 = "INSERT INTO bloodrequest (requestID, FID, orderType, productType, pSname, pFname, unitRequired, bloodGroup, bloodBank, pickUpDate, pickUpTime, remark, status)
						VALUES
						('$requestID','$id','$orderType','$productType','$pSname','$pFname','$unitRequired','$bloodGroup','$bloodBank','$pickUpDate' ,'$pickUpTime' ,'$remark','$status')";
			
			$result = mysqli_query($conn, $sql); //runs the sql statement
			$result2 = mysqli_query($conn, $sql2);
			$result3 = mysqli_query($conn, $sql3); //runs the sql statement
			echo mysqli_error($conn);
			
				
			if($result3)

			{
				
				header("location:../facility/makeRequest.php?id=$id");
			}
			
			else{
				header("Location:../facility/makeRequest.php?id=$id");
				
			}
		?>	
	</body>
</html>