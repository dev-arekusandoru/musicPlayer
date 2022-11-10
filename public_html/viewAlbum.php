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
    $albumID = $_GET['id'];
    $songs = array();
    $album_info = [];
    updateAlbumAverageRating($albumID);

    // get info to display album header
    $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_ID, Artist_Name, Avg_Rating FROM Album JOIN Artist WHERE Album_ID=:id AND Artist_FK=Artist.Artist_ID;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $albumID);
    $stmt->execute();
    $album_info[] = $stmt->fetch(PDO::FETCH_ASSOC);
    $album_info = $album_info[0];

    //if album sql request was valid, pull all songs under the album
    if (isset($album_info['Album_Name'])) {
        // get songs from album
        $sql = "SELECT * FROM Song WHERE Artist_FK=:artist AND Album_FK=:album";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":artist", $album_info['Artist_ID']);
        $stmt->bindParam(":album", $album_info['Album_ID']);
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
    } else {
        //display login if id is not valid
        header("Location: explore.php");
    }
} else if (isset($_POST['review'])) {
    // if a rating was submitted, add it to the db
    print_r("test2");
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