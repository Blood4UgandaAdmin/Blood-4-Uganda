<?php  
$sql = "SELECT * FROM `users` WHERE `userID` = '".$id."'";
$results = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($results)){
	
$profileImage = $row["profilePic"];

   // Check if the user has a custom profile image
   if (!empty($profileImage)) {
    // User has a custom profile image
    $imageUrl = "../img/uploads/$profileImage";
} else {
    // User does not have a custom profile image, use default
    $imageUrl = "../img/uploads/user-icon.jpg";
} 
}
?>