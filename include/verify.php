<html>
	<head>
		<?php
			include('dbconfig.php');
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = md5($password);
			
			$sql = "SELECT  * FROM users WHERE username = '".$username."' AND password = '".$password."';";
			$result = mysqli_query($conn, $sql);
		
			if(mysqli_num_rows($result)<1){
				header("Location:../index.php?error=Error! Invalid credentials.");
			}
			
			session_start();
			while($row = mysqli_fetch_array($result)){
				
				if($password == $row['password'] && $username == $row['username']){
					$id = $row['userID'];
					$roles = $row['roles'];
					
					$_SESSION["id"] = $row['userID'];
					$_SESSION["username"] = $row['username'];
					
					echo "<script type=\"text/javascript\">";
						if($roles == "admin"){												
							echo 'document.location = "../admin/index.php";';
						}
						else if($roles == "donor"){		
							echo 'document.location = "../donor/index.php";';
						}
						else if($roles == "labtechnician"){
							echo 'document.location = "../LabTechnician/index.php";';
						}	
						else if($roles == "volunteer"){
							echo 'document.location = "../volunteer/index.php";';
						}	
						else if($roles == "branch"){
							echo 'document.location = "../urs/index.php";';
						}	
						else if($roles == "bloodbank"){
							echo 'document.location = "../bloodBank/index.php";';
						}	
						else if($roles == "facility"){
							echo 'document.location = "../facility/index.php";';
						}	
								
						else {
							echo	"document.location = \"../login.php?error=Oops, Error Occured!\";";
						}
					echo	"</script>";
				}
				else{					
					header("Location:../login.php?error=Oops, Error Occured!");
				}
			}
			$conn->close();
		?>
	</head>
	<body>

	</body>
<html>