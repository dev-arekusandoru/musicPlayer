<?php
/**
* @var $smarty
* @var $pdo
*
*/
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include PRIVATE_PATH . "functions.php";
    
$artists = array();

$sql ="SELECT Artist_ID, Artist_Name, Image_URL FROM Artist";
$stmt = $pdo->prepare($sql);
$stmt->execute();


foreach($stmt as $row) {
    $artists[] = $row;
}

$artists = alphabetizeArtists($artists);



//print("<pre>".print_r($artists,true)."</pre>");
$smarty->assign('artists', $artists);

$smarty->display("browseArtists.tpl");