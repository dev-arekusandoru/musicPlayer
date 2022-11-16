<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "library.php";
    $smarty->display("userLogin.tpl");
} else {

    $userID = $_SESSION['userid'];

    $sql = "SELECT Artist_ID, Artist_Name, Image_URL FROM Artist JOIN User_Artist ON Artist_ID=User_Artist.Artist_FK WHERE User_Artist.User_FK=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $userID);
    $stmt->execute();
    $userArtists = [];

    foreach ($stmt as $row) {
        $userArtists[$row['Artist_Name']] = $row;
    }

    $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_Name FROM Album JOIN Artist ON Artist_Fk=Artist.Artist_ID JOIN User_Album ON Album_ID=User_Album.Album_FK WHERE User_Album.User_FK=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $userID);
    $stmt->execute();
    $userAlbums = [];

    foreach ($stmt as $row) {
        $userAlbums[$row['Album_Name']] = $row;
    }



    $smarty->assign("userArtists", $userArtists);
    $smarty->assign("userAlbums", $userAlbums);
    $smarty->display("library.tpl");
}