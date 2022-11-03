<?php
/**
 * @var $smarty
 * @var $pdo
 */

include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$artist_name = "";
$artist_img = "";

if (isset($_POST['artist'])) {
    $artist_name = $_POST['artist'];
    $artist_img = implode("-", explode(" ", $artist_name)) . "." . substr($_FILES["img"]["type"], 6);

    $targetDirImg = "img/artist-imgs";
    $targetFile = $targetDirImg . "/" . $artist_img;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    $uploadOK = 1;

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
           // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
           // echo "File is not an image.";
            $uploadOK = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $uploadOK = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOK = 0;
    }
    if ($uploadOK == 0) {
        echo '<script>alert("Sorry, your submission was not uploaded. Make sure your image is valid and the artist does not already exist.")</script>';
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
            //db integration
            $sql = "INSERT INTO Artist (Artist_Name, Image_URL)
        VALUES (:name, :img)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $artist_name);
            $stmt->bindParam(":img", $artist_img);
            try{
            $stmt->execute();}
            catch(Exception) {
                echo '<script>alert("Sorry, your submission was not uploaded. Make sure the artist does not already exist. ")</script>';
            }
            echo '<script>alert("Upload Successful!")</script>';
        }
    }
}

$smarty->display("addArtist.tpl");