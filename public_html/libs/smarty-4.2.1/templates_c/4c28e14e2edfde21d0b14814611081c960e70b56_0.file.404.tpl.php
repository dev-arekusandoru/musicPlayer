<?php
/* Smarty version 4.2.1, created on 2022-11-08 22:40:29
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b212dab3bb3_56961887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c28e14e2edfde21d0b14814611081c960e70b56' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/404.tpl',
      1 => 1667965222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b212dab3bb3_56961887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1576607663636b212daaa552_55936275', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_1576607663636b212daaa552_55936275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1576607663636b212daaa552_55936275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="explore.php">&larr; Back to Explore</a>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
