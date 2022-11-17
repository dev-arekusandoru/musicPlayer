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
    $userPlaylists = [];
    foreach ($stmt as $row) {
        $userPlaylists[$row['Artist_Name']] = $row;
    }
    ksort($userPlaylists);

    $sql = "SELECT Artist_ID, Artist_Name, Image_URL FROM Artist JOIN User_Artist ON Artist_ID=User_Artist.Artist_FK WHERE User_Artist.User_FK=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $userID);
    $stmt->execute();
    $userArtists = [];
    foreach ($stmt as $row) {
        $userArtists[$row['Artist_Name']] = $row;
    }
    ksort($userArtists);

    $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_Name FROM Album JOIN Artist ON Artist_Fk=Artist.Artist_ID JOIN User_Album ON Album_ID=User_Album.Album_FK WHERE User_Album.User_FK=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $userID);
    $stmt->execute();
    $userAlbums = [];
    foreach ($stmt as $row) {
        $userAlbums[$row['Album_Name']] = $row;
    }
    ksort($userAlbums);

    $sql = "SELECT Title, Album.Album_Name, Artist.Artist_Name, Album.Image_URL, Album.Album_ID FROM Song Join Album ON Song.Album_FK=Album.Album_ID JOIN Artist ON Song.Artist_FK=Artist_ID JOIN User_Song ON Song.Song_ID=User_Song.Song_FK WHERE User_Song.User_FK=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $userID);
    $stmt->execute();
    $userSongs = [];
    foreach ($stmt as $row) {
        $userSongs[$row['Title']] = $row;
    }
    ksort($userSongs);

    $smarty->assign("userArtists", $userArtists);
    $smarty->assign("userAlbums", $userAlbums);
    $smarty->assign("userSongs", $userSongs);
    $smarty->display("library.tpl");
}