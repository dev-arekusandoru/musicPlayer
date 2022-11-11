<?php
/**
 * @var $smarty
 *
 */
include "../private_html/config.php";

$smarty->display("viewPlaylist.tpl");

if (isset($_POST['remove'])) {

    /** code that grabs the specific song and removes from the playlist */

}
