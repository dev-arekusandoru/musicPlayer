<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

error_reporting(0);
if (isset($_POST['email'])) {
    /* The login form has been filled out and sent. */
    $sql = "SELECT *
            FROM User
            WHERE Email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->execute();
    if ($stmt->rowCount() != 1) {
        /* handle the user not existing in the database */
        $smarty->display("userLogin.tpl");
        echo '<script>alert("User does not exist.")</script>';
        exit();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $hasedPassword = hash("sha512", $row['Salt'] . $_POST['password']);
    if ($hasedPassword != $row['Password']) {
        /* handle the user typing in the wrong password */
        $smarty->display("userLogin.tpl");
        echo '<script>alert("Invalid login credentials.")</script>';
        exit();
    }
    /* Valid user and password - go to the next screen */
    $_SESSION['logged'] = 1;
    $_SESSION['userid'] = $row['User_ID'];
    $_SESSION['username'] = ucfirst($row['First_Name']);
    $_SESSION['isAdmin'] = $row['isAdmin'];
    if (!empty($_SESSION['page_to_load'])) {
        header("Location: " . $_SESSION['page_to_load']);
    } else {
        header("Location: explore.php");
    }
    exit();
}

$smarty->display("userLogin.tpl");
