<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include PRIVATE_PATH . "functions.php";

// login check
if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "explore.php";
    $smarty->display("userLogin.tpl");
} else if (isset($_GET['id'])) {
    //set up page for sql requests
    $playlistID = $_GET['id'];
    $songs = array();
    $playlist_info = [];
    //updateplaylistAverageRating($playlistID);

    // get info to display playlist header
    $sql = "SELECT Playlist_ID, Playlist_Name, Image_URL, Description, Song_Count, User_ID, First_Name, Last_Name FROM Playlist JOIN User_Playlist ON User_Playlist.Playlist_FK=Playlist_ID JOIN User ON User.User_ID = User_Playlist.User_Fk WHERE Playlist_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $playlistID);
    $stmt->execute();
    $playlist_info[] = $stmt->fetch(PDO::FETCH_ASSOC);
    $playlist_info = $playlist_info[0];

    //if playlist sql request was valid, pull all songs under the playlist
    if (isset($playlist_info['Playlist_Name'])) {
        // get songs from album
        $sql = "SELECT Song_ID, Title, Album_Name, Artist_Name, Album_ID FROM Song JOIN Song_In_Playlist ON Song_ID=Song_In_Playlist.Song_FK JOIN Artist ON Artist_FK = Artist.Artist_ID JOIN Album ON Album.Album_ID=Album_FK WHERE Song_In_Playlist.Playlist_FK=:id ORDER BY Order_Number ASC;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $playlistID);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $songs[] = $row;
        }

        // assign all variables before displaying page
        $smarty->assign("songs", $songs);
        $smarty->assign("playlistInfo", $playlist_info);
        $smarty->display("viewPlaylist.tpl");
    } else {
        //display login if id is not valid
        header("Location: explore.php");
    }
} else {
    // if anything weird happens, send them to the explore page
    header("Location: explore.php");
}