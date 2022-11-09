<?php
/* Smarty version 4.2.1, created on 2022-11-08 23:54:48
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/explore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b3298473a18_25638166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf57c4cb51c8dc81540d6db4af5efc132939d94' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/explore.tpl',
      1 => 1667969680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b3298473a18_25638166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_577022863636b3298439913_93066924', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_737675595636b329843e858_81404196', "explore");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315564223636b3298441929_32008853', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_577022863636b3298439913_93066924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_577022863636b3298439913_93066924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Explore
<?php
}
}
/* {/block "title"} */
/* {block "explore"} */
class Block_737675595636b329843e858_81404196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'explore' => 
  array (
    0 => 'Block_737675595636b329843e858_81404196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="nav-item active">
        <a class="nav-link" href="explore.php">
            <i class="fas fa-compass"></i>
            <span>Explore</span></a>
    </li>
<?php
}
}
/* {/block "explore"} */
/* {block "content"} */
class Block_1315564223636b3298441929_32008853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1315564223636b3298441929_32008853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Recently Artists Heading -->
        <h1 class="h3 mb-4 content-title">Recently Uploaded Artists:</h1>
        <!-- Recently Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recentArtists']->value, 'ra');
$_smarty_tpl->tpl_vars['ra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ra']->value) {
$_smarty_tpl->tpl_vars['ra']->do_else = false;
?>
            <a class="content" href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['ra']->value['Artist_ID'];?>
">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/<?php echo $_smarty_tpl->tpl_vars['ra']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ra']->value['Artist_Name'];?>
">
                </div>
                <h1><?php echo $_smarty_tpl->tpl_vars['ra']->value['Artist_Name'];?>
</h1>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Recently Uploaded Albums:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recentAlbums']->value, 'ras');
$_smarty_tpl->tpl_vars['ras']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ras']->value) {
$_smarty_tpl->tpl_vars['ras']->do_else = false;
?>
            <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['ras']->value['Album_ID'];?>
">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['ras']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ras']->value['Album_Name'];?>
">
                </div>
                <h1><?php echo $_smarty_tpl->tpl_vars['ras']->value['Album_Name'];?>
</h1>
                <h2><?php echo $_smarty_tpl->tpl_vars['ras']->value['Artist_Name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['ras']->value['Release_Year'];?>
</h2>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Alltime Artists Heading -->
        <h1 class="h3 mb-4 content-title">Top All-time Artists:</h1>
        <!--Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Asap-Rocky.jpg" alt="A$AP Rocky">
                </div>
                <h1>A$AP Rocky</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Andy-Mineo.jpg" alt="The Beatles">
                </div>
                <h1>Andy Mineo</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Arctic-Monkeys.jpeg" alt="The Beatles">
                </div>
                <h1>Arctic Monkeys</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Baby-Keem.jpeg" alt="The Beatles">
                </div>
                <h1>Baby Keem</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Backseat-Lovers.PNG" alt="The Beatles">
                </div>
                <h1>The Backseat Lovers</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Bad-Bunny.jpeg" alt="The Beatles">
                </div>
                <h1>Bad Bunny</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/the-beatles.jpg" alt="The Beatles">
                </div>
                <h1>The Beatles</h1>
            </div>
            <div class="content">
                <a class="content-img" href="viewAlbum.tpl">
                    <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                </a>
                <h1>Gorillaz</h1>
            </div>
            <div class="content">
                <a class="content-img" href="viewAlbum.tpl">
                    <img class="img-fluid" src="img/artist-imgs/LivingTombstoneIcon.jpg" alt="">
                </a>
                <h1>The Living Tombstone</h1>
            </div>
            <div class="content">
                <a class="content-img" href="viewAlbum.tpl">
                    <img class="img-fluid" src="img/artist-imgs/TallyHall.jpg" alt="">
                </a>
                <h1>Tally Hall</h1>
            </div>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Albums Heading -->
        <h1 class="h3 mb-4 content-title">Top All-time Albums:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/testing-asap-rocky.jpeg" alt="The Beatles">
                </div>
                <h1>TESTING</h1>
                <h2>A$AP Rocky • 2018</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                </div>
                <h1>Cracker Island</h1>
                <h2>Gorillaz • 2023</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                </div>
                <h1>Marvin's Marvelous...</h1>
                <h2>Tally Hall • 2005</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                </div>
                <h1>zero_one</h1>
                <h2>The Living Tombstone • 2020</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                </div>
                <h1>Abbey Road</h1>
                <h2>The Beatles • 1969</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                </div>
                <h1>Marvin's Marvelous...</h1>
                <h2>Tally Hall • 2005</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                </div>
                <h1>zero_one</h1>
                <h2>The Living Tombstone • 2020</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                </div>
                <h1>Abbey Road</h1>
                <h2>The Beatles • 1969</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/testing-asap-rocky.jpeg" alt="The Beatles">
                </div>
                <h1>TESTING</h1>
                <h2>A$AP Rocky • 2018</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                </div>
                <h1>Cracker Island</h1>
                <h2>Gorillaz • 2023</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                </div>
                <h1>Marvin's Marvelous...</h1>
                <h2>Tally Hall • 2005</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                </div>
                <h1>zero_one</h1>
                <h2>The Living Tombstone • 2020</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                </div>
                <h1>Abbey Road</h1>
                <h2>The Beatles • 1969</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                </div>
                <h1>Marvin's Marvelous...</h1>
                <h2>Tally Hall • 2005</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                </div>
                <h1>zero_one</h1>
                <h2>The Living Tombstone • 2020</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                </div>
                <h1>Abbey Road</h1>
                <h2>The Beatles • 1969</h2>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
