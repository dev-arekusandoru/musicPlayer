<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$albums = array();

$stmt = $pdo->query("SELECT Album_Name, Image_URL FROM Album");
while ($row = $stmt->fetch()) {
    for($i = 0; $i < count($row); $i++) {
        unset($row[$i]);
    }
    $row['Artist_Name'] = "Artist Name";
    $row['release_year'] = "YEAR";

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