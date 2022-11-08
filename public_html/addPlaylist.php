<?php

/**
 * @var $smarty
 *
 */
include "../private_html/config.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "addArtist.php";
    $smarty->display("userLogin.tpl");
} else {
    $smarty->display("addPlaylist.tpl");
}