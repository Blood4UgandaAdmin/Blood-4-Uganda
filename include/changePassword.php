<?php
	include('dbconfig.php');

	$id = $_GET['id'];
	$password = $_POST['password'];
	$oldPassword = $_POST['oldPassword'];
	$cpassword = $_POST['cpassword'];
    $oldPassword = md5($oldPassword);
    $password = md5($password);
    $cpassword = md5($cpassword);
    if(strlen($password) < 8 ) {
        header("Location:../admin/editProfile.php?id=$id&error=Password must be at least 8 characters!");
    } else {
    
        if ($password != $cpassword) {
            header("Location:../admin/editProfile.php?id=$id&error=Passwords do not match!");
        } else {
            $sql="select * from users where ( password='$oldPassword');";

				$res=mysqli_query($conn,$sql);
		  
				if (mysqli_num_rows($res) <1) {
				  
				  $row = mysqli_fetch_assoc($res);
				  if($oldPassword !== isset($row['password']))
				  {
					header("Location:../admin/editProfile.php?id=$id&olderror=Wrong current password");
						  
				  }
				 
				  }
		  else{

	$sql = "UPDATE `users` SET `password`='".$password."' WHERE `userID` = '".$id."'";

	$result = mysqli_query($conn,$sql);
	echo mysqli_error($conn);

	header("Location:../admin/editProfile.php?id=$id");
    }}}
?>