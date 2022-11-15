<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";


if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "addSong.php";
    $smarty->display("userLogin.tpl");
} else {

    if(isset($_POST['select-artist'])) {
        if(isset($_POST['select-album'])) {
            if (!empty($_POST['song-name'])) {
                $artistFK = intval($_POST['select-artist']);
                $albumFK = intval($_POST['select-album']);
                $song_name = $_POST['song-name'];

                $sql = "INSERT INTO Song (Title, Album_FK, Artist_FK) VALUES (:title, :album, :artist);";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":title", $song_name);
                $stmt->bindParam(":album", $albumFK);
                $stmt->bindParam(":artist", $artistFK);
                $stmt->execute();

                echo '<script>alert("Upload successful.")</script>';
            } else {
                echo '<script>alert("Please enter a song name.")</script>';
            }
        } else {
            echo '<script>alert("Please select and album.")</script>';
        }
    }


    // set up and display page
    $artists = array();
    $sql = "SELECT Artist_ID, Artist_Name, Image_URL FROM Artist";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $artists[$row['Artist_Name']] = $row;
    }
    ksort($artists);


    if(isset($_GET['arid'])) {
        $smarty->assign("setArtist", $_GET['arid']);
        $smarty->assign("setAlbum", $_GET['abid']);
    }

    $smarty->assign("artists", $artists);
    $smarty->display("addSong.tpl");
}