<?php
/* Smarty version 4.2.1, created on 2022-11-08 22:35:14
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b1ff2182519_72176413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80f6cffae5d43111b4e4364a2a1f9d3cad523b49' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/sidebar.tpl',
      1 => 1667964913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b1ff2182519_72176413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<!-- Begin Page Content -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1162783282636b1ff217f7c6_53919846', "content");
?>

<!-- /.container-fluid --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_1162783282636b1ff217f7c6_53919846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1162783282636b1ff217f7c6_53919846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">

  <!-- 404 Error Text -->
  <div class="text-center">
    <div class="error mx-auto" data-text="404">404</div>
    <p class="lead text-gray-800 mb-5">Page Not Found</p>
    <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
    <a href="explore.php">&larr; Back to Explore</a>
  </div>

</div>
<?php
}
}
/* {/block "content"} */
}
