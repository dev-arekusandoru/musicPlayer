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
    if (isset($_POST['select-artist'])) {
        if (isset($_POST['select-album'])) {
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

                //find the id of the song
                $sql = "SELECT Song_ID FROM Song ORDER BY Song_ID DESC LIMIT 1;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $songID = $stmt->fetch(PDO::FETCH_ASSOC)['Artist_ID'];

                $sql = "INSERT INTO User_Song (User_FK, Song_FK, Date_Added) VALUES (:id, :sid, curdate());";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":uid", $_SESSION['userid']);
                $stmt->bindParam(":sid", $songID);
                $stmt->execute();


                header("Location: addSong.php?arid=" . $artistFK . "&abid=" . $albumFK);
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


    if (isset($_GET['arid'])) {
        $smarty->assign("setArtist", $_GET['arid']);
        $smarty->assign("setAlbum", $_GET['abid']);
    }

    $smarty->assign("artists", $artists);
    $smarty->display("addSong.tpl");
}