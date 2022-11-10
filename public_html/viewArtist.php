<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include PRIVATE_PATH . "functions.php";

error_reporting(0);
$artistID = $_GET['id'];
$albums = array();
$artist_info = [
];

$sql = "SELECT Artist_Name FROM Artist WHERE Artist_ID=:id;";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $artistID);
$stmt->execute();
$artist_info[] = $stmt->fetch(PDO::FETCH_ASSOC);
//print("<pre>" . print_r($artist_info, true) . "</pre>");
if (isset($artist_info[0]['Artist_Name'])) {

    $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_FK, Artist.Artist_ID, Artist.Artist_Name FROM Album, Artist WHERE Artist_ID=:id AND Artist_FK = :id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $artistID);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $albums[] = $row;
    }

    $albums = sortAlbumsByYear($albums);


//print("<pre>" . print_r($artist_info, true) . "</pre>");


    $smarty->assign("albums", $albums);
    $smarty->assign("artist_name", $artist_info[0]['Artist_Name']);
    $smarty->display("viewArtist.tpl");
} else {
    header("Location: explore.php");
}