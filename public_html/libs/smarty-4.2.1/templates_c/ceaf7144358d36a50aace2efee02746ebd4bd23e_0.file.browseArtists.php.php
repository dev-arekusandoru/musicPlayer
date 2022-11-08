<?php
/* Smarty version 4.2.1, created on 2022-11-08 11:03:19
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/browseArtists.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636a7dc770e606_09609389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceaf7144358d36a50aace2efee02746ebd4bd23e' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/browseArtists.php',
      1 => 1667923397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a7dc770e606_09609389 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

/**
* @var $smarty
* @var $pdo
*
*/
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include PRIVATE_PATH . "functions.php";
    
$artists = array();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "browseArtists.tpl";
    $smarty->display("userLogin.tpl");
} else {

    $sql = "SELECT Artist_ID, Artist_Name, Image_URL FROM Artist";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();


    foreach ($stmt as $row) {
        $artists[] = $row;
    }

    $artists = alphabetizeArtists($artists);


//print("<pre>".print_r($artists,true)."</pre>");
    $smarty->assign('artists', $artists);

    $smarty->display("browseArtists.tpl");
}<?php }
}
