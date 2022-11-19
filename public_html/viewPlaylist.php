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
        $sql = "SELECT * FROM Song JOIN Song_In_Playlist ON Song_In_Playlist.Song_FK=Song_ID JOIN Playlist ON Song_In_Playlist.Playlist_FK=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":artist", $album_info['Artist_ID']);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $songs[] = $row;
        }

        // get reviews from album
        $sql = "SELECT Comment, Stars, First_Name, Last_Name FROM Album_Review JOIN Review ON Review_FK=Review.Review_ID JOIN User ON Review.User_FK=User.User_ID WHERE Album_FK=:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $reviews = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $reviews[] = $row;
        }

        // assign all variables before displaying page
        $smarty->assign('reviews', $reviews);
        $smarty->assign("songs", $songs);
        $smarty->assign("albumInfo", $album_info);
        $smarty->display("viewAlbum.tpl");
    }
    else {
        //display login if id is not valid
        header("Location: explore.php");
    }
} else if (isset($_POST['review'])) {
    // if a rating was submitted, add it to the db
    if (!empty($_POST['review']) && !empty($_POST['rating'])) {
        $comment = $_POST['review'];
        $stars = $_POST['rating'];

        // add the review
        $sql = "INSERT INTO Review (Comment, Stars, User_FK) VALUES (:comment, :stars, :user)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':stars', $stars);
        $stmt->bindParam(':user', $_SESSION['userid']);
        $stmt->execute();

        //find the id of the review
        $sql = "SELECT Review_ID FROM Review ORDER BY Review_ID DESC LIMIT 1;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $reviewID = $stmt->fetch(PDO::FETCH_ASSOC)['Review_ID'];

        // use the ids to create the linking row in the Album_Review Table
        $sql = "INSERT INTO Album_Review (Album_FK, Review_FK) VALUES (:aid, :rid);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':aid', $_POST['albumID']);
        $stmt->bindParam(':rid', $reviewID);
        $stmt->execute();

        // reload the page for the same album
        header("Location: viewAlbum.php?id=" . $_POST['albumID']);
    } else {
        // if anything weird happens, send them to the explore page
        header("Location: explore.php");
    }
} else {
    // if anything weird happens, send them to the explore page
    header("Location: explore.php");
}