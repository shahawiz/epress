<?php
include 'inc/db.php';

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header('Location:newpost.php?done=1');
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$ss_name = $_SESSION['username'];
$user_sql = $conn->query("SELECT user_id FROM `users` WHERE `username` = '$ss_name'");
$Quser = $user_sql->fetch();
$user_id = $Quser[0];

$title = $_POST['title'];
$cat = $_POST['category'];
$content = $_POST['content'];
$date = date("Y-m-d h:m:s");
$cover_img = $_FILES["fileToUpload"]["name"];

$conn->exec("INSERT INTO `posts` (`post_id`, `cat_id`, `owner_id`, `date`, `status`, `post_image`, `post_title`, `content`) 
VALUES (NULL, '$cat', '1', '$date', '$user_id ', '$cover_img', '$title', '$content');");


?>