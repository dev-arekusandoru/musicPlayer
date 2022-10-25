<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$artists = array();

$stmt = $pdo->query("SELECT Artist_Name FROM Artist");
while ($row = $stmt->fetch()) {
    for($i = 0; $i < count($row); $i++) {
        unset($row[$i]);
    }
    $artists[] = $row;
}





//print("<pre>".print_r($artists,true)."</pre>");
$smarty->assign("artists", $artists);
$smarty->display("addAlbum.tpl");