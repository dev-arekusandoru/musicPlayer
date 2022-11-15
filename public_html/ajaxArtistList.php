<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include_once PRIVATE_PATH . "functions.php";

if (isset($_POST['artistID'])) {
    $sql = "SELECT * FROM Album WHERE Artist_FK = :id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_POST['artistID']);
    $stmt->execute();

    $albums = [];
    $html = "";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $albums[] = $row;
    }

    if (count($albums) >= 1) {
        $html = "<option disabled>Select an Album</option>";
        foreach ($albums as $a) {
            $html .= "<option value=" . $a['Album_ID'] . ">" . $a['Album_Name'] . "</option>";
        }
    } else {
        $html .= "<option disabled>No Albums</option>";
    }

    echo $html;
}
if (isset($_POST['albumID'])) {
    $sql = "SELECT Image_URL FROM Album WHERE Album_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_POST['albumID']);
    $stmt->execute();
    $data = $stmt->fetch();

    echo "img/album-imgs/" . $data[0];
}