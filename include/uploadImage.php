<?php
include('dbconfig.php'); //establish connection to db
$id = $_GET['id'];
$_SESSION["id"] = $id;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "../img/uploads/";
    $targetFile = $targetDir . basename($_FILES["profilePicture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($uploadOk == 0) {
        header("Location:../admin/failure.php?id=$id");
    } else {
        if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["profilePicture"]["name"])) . " has been uploaded.";
			
			include('dbconfig.php'); //establish connection to db
           

            // Update the user's profile picture in the database
            $newProfilePicture = basename($_FILES["profilePicture"]["name"]);
            $sql = "UPDATE users SET profilePic = '$newProfilePicture' WHERE userID = '$id'"; // You should use the appropriate WHERE clause to target the specific user.

            if ($conn->query($sql) === TRUE) {
                header("location:../admin/success.php?id=$id");
            } else {
                echo "Error updating profile picture: " . $conn->error;
            }

            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>