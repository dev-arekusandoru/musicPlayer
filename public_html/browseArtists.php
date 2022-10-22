<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$artists = array();

$stmt = $pdo->query("SELECT Artist_Name, Image_URL FROM Artist");
while ($row = $stmt->fetch()) {
    unset($row['0']);
    unset($row['1']);
    $artists[] = $row;
}

//organize artists alphabetically
for($i = 0; $i < count($artists); $i++) {
    for($j = 0; $j < $i; $j++) {
        if (strtolower($artists[$i]['Artist_Name'][0]) < strtolower($artists[$j]['Artist_Name'][0])) {
            $temp = $artists[$i];
            $artists[$i] = $artists[$j];
            $artists[$j] = $temp;
            break;
        }
    }
}


//print("<pre>".print_r($artists,true)."</pre>");
$smarty->assign('artists', $artists);


$smarty->display("browseArtists.tpl");