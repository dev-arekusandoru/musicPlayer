<?php
/* Smarty version 4.2.1, created on 2022-11-07 13:23:52
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63694d38a50642_91190256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6202a83cc467bf19990a7dd2671fed1e3c6c73b6' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/login.php',
      1 => 1664897694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63694d38a50642_91190256 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

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

<?php }
}
