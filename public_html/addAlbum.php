<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

if(isset($_POST['album'])) {
    $album_name = "";
    $album_img = "";
    $release_year = 0;

    $album_name = $_POST['album'];
    //$test = $_FILES['img']["type"];
    $album_img = implode("-", explode(" ", $album_name)) . "." . substr($_FILES['img']["type"], 6);
    $release_year = $_POST['release-year'];

    $sql = "INSERT INTO Album (Album_Name, Image_URL, Release_Year)
            VALUES (:name, :img, :year)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $album_name);
    $stmt->bindParam(":img", $album_img);
    $stmt->bindParam(":year", $release_year);
    $stmt->execute();
}

$artists = array();

$stmt = $pdo->query("SELECT Artist_Name, Artist_ID FROM Artist");
while ($row = $stmt->fetch()) {
    for($i = 0; $i < count($row); $i++) {
        unset($row[$i]);
    }
    $artists[] = $row;
}

//print("<pre>".print_r($artists,true)."</pre>");
$smarty->assign("artists", $artists);
$smarty->display("addAlbum.tpl");