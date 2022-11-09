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
} else {
    //get recently uploaded artists
    $recentArtists = [];
    $sql = "SELECT * FROM (
                SELECT * FROM Artist ORDER BY Artist_ID DESC LIMIT 12
            )Var1 ORDER BY Artist_ID DESC;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $recentArtists[$row['Artist_Name']] = $row;
    }

    //get recently uploaded albums
    $recentAlbums = [];
    $sql = "SELECT Album_ID, Album_Name, Release_Year, Album.Image_URL, Artist.Artist_Name 
            FROM Album JOIN Artist 
            ON Artist_FK=Artist_ID 
            ORDER BY Album_ID DESC LIMIT 8;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $recentAlbums[$row['Album_Name']] = $row;
    }




    $smarty->assign("recentArtists", $recentArtists);
    $smarty->assign("recentAlbums", $recentAlbums);
    $smarty->display("explore.tpl");
}
