<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include PRIVATE_PATH . "functions.php";


if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) { // login check
    $_SESSION['page_to_load'] = "explore.php";
    $smarty->display("userLogin.tpl");
}
else if (isset($_GET['id'])) { // if viewing an album, not submiting a review
    error_reporting(0);
    $artistID = $_GET['id'];
    $albums = array();
    $artist_info = [];
    updateArtistAverageRating($artistID);

    $sql = "SELECT * FROM Artist WHERE Artist_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $artistID);
    $stmt->execute();
    $artist_info[] = $stmt->fetch(PDO::FETCH_ASSOC);
    $artist_info = $artist_info[0];

    if (isset($artist_info['Artist_Name'])) { // if artist db query was success

        // get album data and sort it
        $sql = "SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_FK, Artist.Artist_ID, Artist.Artist_Name FROM Album, Artist WHERE Artist_ID=:id AND Artist_FK = :id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $artistID);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $albums[] = $row;
        }

        // get the reviews
        // get reviews from album
        $sql = "SELECT Comment, Stars, First_Name, Last_Name FROM Artist_Review JOIN Review ON Review_FK=Review.Review_ID JOIN User ON Review.User_FK=User.User_ID WHERE Artist_FK=:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $reviews = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $reviews[] = $row;
        }
        // assign all variables before displaying page
        $smarty->assign('reviews', $reviews);
        $smarty->assign("albums", $albums);
        $smarty->assign("artist_info", $artist_info);
        $smarty->display("viewArtist.tpl");
    } else { // something happened w db query, send to explore
        header("Location: explore.php");
    }
}
else if (isset($_POST['review'])) { // if submitting review
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
        $sql = "INSERT INTO Artist_Review (Artist_FK, Review_FK) VALUES (:aid, :rid);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':aid', $_POST['artistID']);
        $stmt->bindParam(':rid', $reviewID);
        $stmt->execute();

        // reload the page for the same album
        header("Location: viewArtist.php?id=" . $_POST['artistID']);
    } else {
        // if anything weird happens, send them to the explore page
        header("Location: explore.php");
    }
}
else {
    // if anything weird happens, send them to the explore page
    header("Location: explore.php");
}