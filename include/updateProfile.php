<?php
include('dbconfig.php'); // Establish connection to db
session_start();

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
$messages = "Congratulations! You have successfully created a new admin account";
$roles = "admin";
$userID = "";
$notificationid = "";
$password = "Admin@1234";

// File upload code (similar to your previous script)
$targetDir = "../img/uploads/";
$targetFile = $targetDir . basename($_FILES["profilePicture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

if (exif_imagetype($_FILES["profilePicture"]["tmp_name"]) === false) {
    echo "Sorry, only images are allowed.";
    $uploadOk = 0;
}

// Check other conditions and handle file upload as needed...

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["profilePicture"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Insert new admin account code
$sql = "select * from users where (username='$username' or email='$email');";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if ($email == isset($row['email'])) {
        header("Location:../php/createAdmin.php?id=$userID: Email already exists");
        echo "";
    }
    if ($username == isset($row['username'])) {
        header("Location:../php/createAdmin.php?id=$userID: Username already exists");
        echo "Username already exists";
    }
} else {
    // Generate notificationid
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

    // Generate userID
    $sqlid = "SELECT `adminID` AS max FROM `admin` ORDER BY `adminID` DESC";
    $resultmax = mysqli_query($conn, $sqlid); 
    while($row = mysqli_fetch_array($resultmax)){
        
        $nuserid = $row['max']; 
        $userID = intval(substr($nuserid , 2)) + 1; 
                $userID = uniqid();	

        if($userID<10){
            $userID = 'A000'.$userID;
        }
        else if($userID<100){
            $userID = 'A00'.$userID;
        }
        else if($userID<1000){
            $userID = 'A0'.$userID;
        }
        else if($userID>1000){
            $userID = 'A'.$userID;
        }
        break;
    }
    // ...

    // Insert into notifications table
    $sql = "INSERT INTO notifications (notificationid, userID, messages, currentUserID)
            VALUES ('$notificationid','$userID', '$messages', '$id')";
    mysqli_query($conn, $sql);

    // Insert into users table
    $sql = "INSERT INTO users (userID, password, username, email, roles) 
            VALUES ('$userID','$password','$username','$email','$roles')";
    mysqli_query($conn, $sql);

    // Insert into admin table
    $sql = "INSERT INTO admin (adminID, sname, fname, dob, bloodGroup, phoneCode, tel, email, country, region, district, plotNo, RegisteredBy)
            VALUES ('$userID','$sname','$fname','$dob','$bloodGroup','$phoneCode','$tel','$email','$country','$region','$district','$plotNo','$id')";
    $result3 = mysqli_query($conn, $sql);

    if ($result3) {
        header("location:../admin/addAdmin.php?id=$userID: Successfully Registered");
    } else {
        header("Location:../../admin/addAdmin.php?error=Please Try Again!");
    }
}

$conn->close();
?>
