<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "explore.php";
    $smarty->display("explore.tpl");
} else {
    if (isset($_GET['arid']) && isset($_GET['abid']) && isset($_GET['sid'])) {
        $sql = "SELECT Title, Image_URL FROM Song JOIN Album ON Song.Album_FK=Album.Album_ID WHERE Song_ID=:s;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":s", $_GET['sid']);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);


        print_r($data);

        $smarty->assign("oldName", $data['Title']);
        $smarty->assign("url", $data['Image_URL']);
        $smarty->assign("album", $_GET['abid']);
        $smarty->assign("id", $_GET['sid']);
        $smarty->display("edit.tpl");

    } else if (isset($_GET['id'])) {
        if (!empty($_POST['name'])) {
            $newName = $_POST['name'];

            $sql = "UPDATE Song SET Title=:t WHERE Song_ID=:s;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":t", $newName);
            $stmt->bindParam(":s", $_GET['id']);
            $stmt->execute();

            echo '<script>alert("Song name changed")</script>';

            header("Location: viewAlbum.php?id=" . $_POST['album-id']);

        } else {
            //header("Location: viewAlbum.php?id=" . $_POST['album-id']);
            echo '<script>alert("No changes made.")</script>';
        }
    } else {
        //header("Location: explore.php");
    }
}