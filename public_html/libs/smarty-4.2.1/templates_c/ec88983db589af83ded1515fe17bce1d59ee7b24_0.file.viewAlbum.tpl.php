<?php
/* Smarty version 4.2.1, created on 2022-11-20 20:32:40
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637ad5380eeb58_38340146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec88983db589af83ded1515fe17bce1d59ee7b24' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewAlbum.tpl',
      1 => 1668993926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ad5380eeb58_38340146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424957362637ad5380602c6_17498218', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1852889017637ad538070762_40028729', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_424957362637ad5380602c6_17498218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_424957362637ad5380602c6_17498218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['albumInfo']->value['Album_Name'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1852889017637ad538070762_40028729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1852889017637ad538070762_40028729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!--Delete button -->
        <!-- <div class="float-right relative-top">
             <a onclick="confirmAction()">
                 <img src="img/trashcan.png" alt="white trash can image" height="30" width="30">
             </a>
         </div>-->
        <!-- Album header like metadata and stuff -->
        <div class="row ml-md-2">
            <div class="album-metadata col-sm-12 p-0">
                <img src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Image_URL'];?>
" class="img-responsive artwork float-md-left mr-2"
                     alt="">
                <h1><?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Album_Name'];?>
</h1>
                <a href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Artist_ID'];?>
" class="link-to"><?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Artist_Name'];?>
</a>
                <h6>GENRE • <?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Release_Year'];?>
</h6>
                <div class=" ml-0 pl-0">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < floor($_smarty_tpl->tpl_vars['albumInfo']->value['Avg_Rating']/2)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < floor($_smarty_tpl->tpl_vars['albumInfo']->value['Avg_Rating']/2); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    <?php }
}
?>
                    <?php if (fmod($_smarty_tpl->tpl_vars['albumInfo']->value['Avg_Rating'],2) == 1) {?>
                        <img src="img/HalfDisc.jpg" class="rating-disc" alt="HalfDisc">
                    <?php } elseif ($_smarty_tpl->tpl_vars['albumInfo']->value['Avg_Rating'] == 0) {?>
                        <h6>NO RATINGS</h6>
                    <?php }?>
                </div>
                <div style="height: 15px;"></div>
                <a class="mb-7 add-music-button" href="#">Edit Album Details</a>
                <br>
                <a class="mb-7 add-music-button" href="addSong.php?arid=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Artist_ID'];?>
&abid=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Album_ID'];?>
">Add Song</a>
                <br>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <!-- Album body like song names -->
        <div class="album-tracklist row">
            <div class="col-12">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
                    <div class="row album-song justify-content-between">
                        <div class="a-song-info">
                            <h1><?php echo $_smarty_tpl->tpl_vars['song']->value['Title'];?>
</h1>
                        </div>
                        <div class="dropdown">
                            <ul class="navbar-nav ml-auto">
                                <!-- Nav Item - Song Information -->
                                <li class="nav-item dropdown no-arrow" style="border: none;">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                    </a>
                                    <!-- Dropdown - Song Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                         aria-labelledby="userDropdown0">
                                        <?php if ($_SESSION['isAdmin'] == 1) {?>
                                        <a class="dropdown-item"
                                           href="addSong.tpl?arid=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Artist_ID'];?>
&abid=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Album_ID'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['song']->value['Song_ID'];?>
">
                                            <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Edit Song Details
                                        </a>
                                        <?php }?>
                                        <a class="dropdown-item" href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Artist_ID'];?>
">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            View Artist
                                        </a>
                                        <a class="dropdown-item" href="addSong.php">
                                            <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Add to playlist
                                        </a>
                                        <?php if ($_SESSION['isAdmin'] == 1) {?>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="deleteSong.php?id=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Song_ID'];?>
">
                                            <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Delete Song
                                        </a>
                                        <?php }?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <div class="content-splitter"></div>

        <!--Start Album comment section-->
        <h1 class="h3 content-title">Reviews:</h1>
        <div class="row comments justify-content-around">
            <!-- all the comments -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
                <div class="comment col-md-6">
                    <div class="comment-header">
                        <h1 class="row container ml-0 pl-0"><?php echo ucfirst($_smarty_tpl->tpl_vars['review']->value['First_Name']);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['review']->value['Last_Name']);?>
</h1>
                        <div class="row container ml-0 pl-0">
                            <h2 style="line-height: 27px" class="mr-1">Rating: </h2>
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < floor($_smarty_tpl->tpl_vars['review']->value['Stars']/2)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < floor($_smarty_tpl->tpl_vars['review']->value['Stars']/2); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                            <?php }
}
?>
                            <?php if (fmod($_smarty_tpl->tpl_vars['review']->value['Stars'],2) == 1) {?>
                                <img src="img/HalfDisc.jpg" class="rating-disc" alt="HalfDisc">
                            <?php }?>
                        </div>
                    </div>
                    <div class="comment-body">
                        <p><?php echo $_smarty_tpl->tpl_vars['review']->value['Comment'];?>
</p>
                    </div>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Add review  button-->
        <div class="row add-comment justify-content-center mb-5">
            <button type="button" class="btn btn-primary add-comment-button" data-toggle="modal"
                    data-target="#exampleModal">
                Add Review
            </button>
        </div>

        <!-- Review Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="viewAlbum.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header bg-darker" style="border: none;">
                            <h5 class="modal-title text-light" id="reviewModalLabel">Write Review</h5>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bg-dark">
                                <div class="form-group">
                                    <div class="values">
                                        <label for="rating">Rating:</label>
                                        <input type="number" class="bg-dark text-light"
                                               style="border: 1px solid #EBEBEB;" placeholder="1-10"
                                               name="rating" max="10" min="1" onkeydown="return false">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Review:</label>
                                    <textarea class="form-control bg-dark" type="text" name="review" id="review-text"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer bg-darker" style="border: none;">
                            <button type="button" class="btn btn-secondary bg-dark" style="border: 1px solid #EBEBEB;"
                                    data-dismiss="modal">Cancel
                            </button>
                            <input type="submit" value="Submit Review" class="btn btn-primary">
                        </div>
                        <input type='hidden' name='albumID' value="<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Album_ID'];?>
"/>
                    </div>
                </form>
            </div>
        </div>
        <!--End Album comment section-->
    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
