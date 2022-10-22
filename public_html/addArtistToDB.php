<?php
/**
 * @var $smarty
 * @var $pdo
 */

include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$artist_name = "";
$artist_img = "";


$artist_name = $_POST['artist'];
//$test = $_FILES['img']["type"];

$artist_img = implode("-", explode(" ", $artist_name)) . "." . substr($_FILES["img"]["type"], 6);


$sql = "INSERT INTO Artist (Artist_Name, Image_URL)
        VALUES (:name, :img)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":name", $artist_name);
$stmt->bindParam(":img", $artist_img);
$stmt->execute();

$smarty->display("addArtist.tpl");