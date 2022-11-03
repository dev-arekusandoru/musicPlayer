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

    if ($uploadOK == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



    $sql = "INSERT INTO Artist (Artist_Name, Image_URL)
        VALUES (:name, :img)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $artist_name);
    $stmt->bindParam(":img", $artist_img);
    $stmt->execute();
}

$smarty->display("addArtist.tpl");