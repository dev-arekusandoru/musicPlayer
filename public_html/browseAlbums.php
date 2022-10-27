<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$albums = array();

$stmt = $pdo->query("SELECT Album_ID, Album_Name, Album.Image_URL, Release_Year, Artist_Name FROM Album JOIN Artist ON Artist_FK=Artist.Artist_ID");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $albums[] = $row;
}

//organize albums alphabetically
for($i = 0; $i < count($albums); $i++) {
    for($j = 0; $j < $i; $j++) {
        if (strtolower($albums[$i]['Album_Name'][0]) < strtolower($albums[$j]['Album_Name'][0])) {
            $temp = $albums[$i];
            $albums[$i] = $albums[$j];
            $albums[$j] = $temp;
            break;
        }
    }
}

//print("<pre>".print_r($albums,true)."</pre>");
$smarty->assign('albums', $albums);

$smarty->display("browseAlbums.tpl");