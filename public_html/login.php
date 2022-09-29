<?php
/**
 * @var $smarty
 */
include "../private_html/config.php";
include PRIVATE_PATH. "functions.php";

if(isset($_POST['email'])) {
    $servername = "localhost";
    $username = "username";
    $password = "password";

// Create connection
    $conn = new mysqli($servername, $username, $password);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
}


$smarty->display("userLogin.tpl");

