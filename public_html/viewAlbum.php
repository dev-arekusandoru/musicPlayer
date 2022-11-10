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


    if (isset($_POST['review'])) {
        $comment = $_POST['review'];
        $stars = $_POST['rating'];
//    $comment = "Good";
//    $stars = 5;
        $user = 1;
        $sql = "INSERT INTO Review (Comment, Stars, User_FK) VALUES (:comment, :stars, :user)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':stars', $stars);
        $stmt->bindParam(':user', $user);
        $stmt->execute();
    }

//SELECT * FROM Album_Review WHERE Album_FK = :id;
    $sql = "SELECT Comment, Stars FROM Album_Review JOIN Review ON Review_FK=Review.Review_ID JOIN User ON Review.User_FK=User.User_ID WHERE Album_FK=:id;";//WHERE Review_FK = :id;
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();

    $reviews = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $reviews[] = $row;
    }

    $smarty->assign('reviews',$reviews);
    $smarty->assign("songs", $songs);
    $smarty->assign("albumInfo", $album_info);
    $smarty->display("viewAlbum.tpl");
} else {
    header("Location: explore.php");
}
