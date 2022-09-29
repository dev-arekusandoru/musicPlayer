<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include PRIVATE_PATH . "functions.php";
include PRIVATE_PATH . "dbConfig.php";

if(isset($_POST['email'])) {
    $sql = "SELECT * FROM User WHERE Email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}


$smarty->display("userLogin.tpl");

