<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";


$albumID = $_GET['id'];
$songs = array();
$album_info = [
];

$sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_ID, Artist_Name FROM Album JOIN Artist WHERE Album_ID=:id AND Artist_FK=Artist.Artist_ID;";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $albumID);
$stmt->execute();
$album_info[] = $stmt->fetch(PDO::FETCH_ASSOC);
$album_info = $album_info[0];
//print("<pre>" . print_r($album_info, true) . "</pre>");

if (isset($album_info['Album_Name'])) {

    $sql = "SELECT * FROM Song WHERE Artist_FK=:artist AND Album_FK=:album";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":artist", $album_info['Artist_ID']);
    $stmt->bindParam(":album", $album_info['Album_ID']);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $songs[] = $row;
    }

//print("<pre>" . print_r($songs, true) . "</pre>");

    $smarty->assign("songs", $songs);
    $smarty->assign("albumInfo", $album_info);
    $smarty->display("viewAlbum.tpl");
} else {
    header("Location: explore.php");
}

