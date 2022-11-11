<?php
/* Smarty version 4.2.1, created on 2022-11-10 21:53:34
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636db92eac82b9_29832967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac196389b9c3e823d9556ff185082dfff0144df0' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/profile.tpl',
      1 => 1668135212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636db92eac82b9_29832967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_527340316636db92eac15e0_27975553', "profile");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_488976601636db92eac54c4_39087323', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "profile"} */
class Block_527340316636db92eac15e0_27975553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_527340316636db92eac15e0_27975553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="nav-item active">
        <a class="nav-link" href="profile.php">
            <i class="fas fa-user fa-tachometer-alt"></i>
            <span>My Profile</span></a>
    </li>
<?php
}
}
/* {/block "profile"} */
/* {block "content"} */
class Block_488976601636db92eac54c4_39087323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_488976601636db92eac54c4_39087323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <img class="artwork float-left pfp" src="img/pfp/blank.png">
        <h1>Account Name</h1>

        <div class="buttons">
            <!-- Change Password -->
            <button class="open-button pfpbutton" onclick="openForm()">Change Password</button>

            <!--Upload PFP Image -->
            <input type="file" id="imgupload" style="display:none">
            <label for='imgupload'> <input type="file" id="myFile" name="filename"></label>
        </div>

        <!-- change password popup -->
        <div class="form-popup" id="myForm">
            <form class="form-container" method="post" action="profile.php">
                <label for="newPassword"><b>New password</b></label>
                <input type="password" placeholder="Enter New password" id="newPassword" name="newPassword" required>

                <label for="verifyPassword"><b>Verify password</b></label>
                <input type="password" placeholder="Verify password" id="verifyPassword" name="verifyPassword" required>

                <input type="submit" class="btn" value="submit" name="changepw">
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
        </div>

        <?php echo '<script'; ?>
>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        <?php echo '</script'; ?>
>

        <br><br><br><br>
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>Songs Uploaded:</th>
                <th>15</th>
            </tr>
            <tr>
                <th>Artists Uploaded:</th>
                <th>8</th>
            </tr>
            <tr>
                <th>Album Uploaded:</th>
                <th>1</th>
            </tr>
            <tr>
                <th>Playlist Created:</th>
                <th>0</th>
            </tr>
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
