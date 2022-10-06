<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

if(isset($_POST['email'])){
    /* The login form has been filled out and sent. */
    $sql = "SELECT *
            FROM User
            WHERE Email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->execute();
    if($stmt->rowCount() != 1){
        /* handle the user not existing in the database */
        echo "NO USER";
        exit();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $hasedPassword = hash("sha512", $row['Salt'] . $_POST['password']);
    if($hasedPassword != $row['Password']){
        /* handle the user typing in the wrong password */
        echo "BAD PASSWORD";
        exit();
    }
    /* Valid user and password - go to the next screen */
    $smarty->display("explore.tpl");
    exit();
}

$smarty->display("userLogin.tpl");

