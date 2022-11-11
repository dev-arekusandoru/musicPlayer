<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";


if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) { // login check
    $_SESSION['page_to_load'] = "explore.php";
    $smarty->display("userLogin.tpl");
} else if(isset($_POST['newPassword'])){
    if(!empty($_POST['newPassword']) && !empty($_POST['verifyPassword'])) {
        $newPass = $_POST['newPassword'];
        $vPass = $_POST['verifyPassword'];
        if(strcomp($newPass, $vPass) == 0) {
            $newHashedPass = hash("sha512", "09ebb83935e7cdc3d96d43aae2af9a30" . $_POST['password']);
            $sql = "UPDATE User SET Password=:pass WHERE User_ID=:id;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":pass", $newHashedPass);
            $stmt->bindParam(":id", $_SESSION['userid']);
            $stmt->execute();

            header("Location: profile.php");
        }
    }
} else if(!isset($_POST['newPassword'])) {
    $smarty->display("profile.tpl");

} else {
    header("Location: explore.php");
}