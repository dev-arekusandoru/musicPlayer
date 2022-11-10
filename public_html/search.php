<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include PRIVATE_PATH . "dbConfig.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "explore.php";
    $smarty->display("userLogin.tpl");
} else if(isset($_GET['search'])){
    $searchQ = $_GET['search'];

    //find artists that have the term in the name
    $searchArtists = [];
    $sql = "SELECT * FROM Artist WHERE Artist_Name LIKE :search ORDER BY Average_Rating DESC;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":search", '%' . $searchQ . '%');
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $searchArtists[$row['Artist_Name']] = $row;
    }
    //sql to find artists who have a song with the term
    //SELECT * FROM Artist JOIN Album ON Artist_ID=Album.Artist_FK JOIN Song ON Artist_ID=Song.Artist_FK WHERE Song.Title LIKE '%mirr%';

    //get recently uploaded albums
    $searchAlbums = [];
    $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_Name FROM Album JOIN Artist ON Artist_FK=Artist.Artist_ID WHERE Artist.Artist_Name LIKE :search OR Album_Name LIKE :search ORDER BY Avg_Rating DESC;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":search", '%' . $searchQ . '%');
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $searchAlbums[$row['Album_Name']] = $row;
    }

    $searchSongs = [];
    $sql = "SELECT Title, Album_ID, Album_Name, Album.Image_URL, Artist_Name FROM Song JOIN Album ON Album_FK=Album.Album_ID JOIN Artist ON Album.Artist_FK=Artist.Artist_ID WHERE Title LIKE :search;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":search", '%' . $searchQ . '%');
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $searchSongs[$row['Title']] = $row;
    }


    $smarty->assign("searchterm", $searchQ);
    $smarty->assign("searchArtists", $searchArtists);
    $smarty->assign("searchAlbums", $searchAlbums);
    $smarty->assign("searchSongs", $searchSongs);
    $smarty->display("searchResults.tpl");
}
