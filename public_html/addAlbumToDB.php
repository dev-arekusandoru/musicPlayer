<?php
/**
 * @var $smarty
 * @var $pdo
 */

include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$album_name = "";
$album_img = "";


$album_name = $_POST['album'];
//$test = $_FILES['img']["type"];

$album_img = implode("-", explode(" ", $album_name)) . "." . substr($_FILES['img']["type"], 6);

print_r($album_img);
/*
$sql = "INSERT INTO Album (Album_Name, Image_URL)
        VALUES (:name, :img)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":name", $album_name);
$stmt->bindParam(":img", $album_img);
$stmt->execute();

$smarty->display("addAlbum.tpl");
*/