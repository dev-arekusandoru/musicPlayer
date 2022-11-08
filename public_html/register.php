<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

$fname = "";
$lname = "";
$email = "";
$pass = "";
$vpass = "";


$registerCheck = 1;
$passwordCheck = 0;


if(isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "SELECT Email FROM User";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    foreach($data as $e) {
        if(strcmp($e, $email) == 0) {
            $registerCheck = 0;
        }
    }

    if($registerCheck == 1 ){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['password'];
        $vpass = $_POST['vpassword'];
        $salt = "09ebb83935e7cdc3d96d43aae2af9a30";
        $hashedPassword = hash("sha512", "09ebb83935e7cdc3d96d43aae2af9a30" . $pass);
        if(strcmp($pass, $vpass) == 0) {
            $sql = "INSERT INTO User (First_Name, Last_Name, Email, Password, Salt) VALUES (:fname, :lname, :email, :pass, :salt)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":lname", $lname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pass", $hashedPassword);
            $stmt->bindParam(":salt", $salt);

            $stmt->execute();

            header("Location: login.php");
            echo '<script>alert("Registration successful. You may now login.")</script>';
        } else {
            $smarty->display("userRegister.tpl");
            echo '<script>alert("Passwords do not match.")</script>';
            exit();
        }
    } else {
        $smarty->display("userRegister.tpl");
        echo '<script>alert("Email is already registered.")</script>';
        exit();
    }
} else {
    $smarty->display("userRegister.tpl");
}