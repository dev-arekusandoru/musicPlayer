<?php
/* Smarty version 4.2.1, created on 2022-11-14 21:17:02
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewArtist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6372f69e32fe97_23661003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b14ea7dd71a160b30b37d168ebd7b222e10214' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewArtist.tpl',
      1 => 1668478617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6372f69e32fe97_23661003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20983536346372f69e2cbc51_12643569', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19134191426372f69e2d7cc7_02413924', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_20983536346372f69e2cbc51_12643569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20983536346372f69e2cbc51_12643569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['artist_info']->value['Artist_Name'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_19134191426372f69e2d7cc7_02413924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19134191426372f69e2d7cc7_02413924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!--Delete button -->
        <div class="float-right relative-top">
            <a onclick="confirmAction()">
                <img src="img/trashcan.png" alt="trash can" height="30" width="30">
            </a>
        </div>

        <!-- Page Heading -->
        <!-- Artist Information -->
        <h1 class="h3 mb-0 content-title"><?php echo $_smarty_tpl->tpl_vars['artist_info']->value['Artist_Name'];?>
:</h1>
        <h2 class="mb-1 artist-rating">Average Album Rating: </h2>
        <div class=" ml-0 pl-0">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < floor($_smarty_tpl->tpl_vars['artist_info']->value['Average_Rating']/2)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < floor($_smarty_tpl->tpl_vars['artist_info']->value['Average_Rating']/2); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
            <?php }
}
?>
            <?php if (fmod($_smarty_tpl->tpl_vars['artist_info']->value['Average_Rating'],2) == 1) {?>
                <img src="img/HalfDisc.jpg" class="rating-disc" alt="HalfDisc">
            <?php } elseif ($_smarty_tpl->tpl_vars['artist_info']->value['Average_Rating'] == 0) {?>
                <h6>NO RATINGS</h6>
            <?php }?>
        </div>
        <div style="height: 10px;"></div>
        <a class="mb-7 add-music-button" href="addAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['artist_info']->value['Artist_ID'];?>
">Add Album</a>
        <!--Page Content-->
        <!-- Artist Discography  -->
        <div class="row mt-4 pl-3 pr-3 justify-content-around">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['Album_ID'];?>
">
                    <div class="content-img">
                        <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['album']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['album']->value['Album_Name'];?>
">
                    </div>
                    <h1><?php echo $_smarty_tpl->tpl_vars['album']->value['Album_Name'];?>
</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['album']->value['Release_Year'];?>
</h2>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="content-splitter"></div>

        <!--Start Artist comment section-->
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
            <button type="button" class="btn btn-primary add-comment-button" data-toggle="modal" data-target="#exampleModal">
                Add Review
            </button>
        </div>

        <!-- Review Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="viewArtist.php" method="post" enctype="multipart/form-data">
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
                                           style="border: 1px solid #EBEBEB;"
                                           name="rating" value="0" max="10" min="1" onkeydown="return false">
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
                        <input type='hidden' name='artistID' value="<?php echo $_smarty_tpl->tpl_vars['artist_info']->value['Artist_ID'];?>
"/>
                    </div>
                </form>
            </div>
        </div>
        <!--End Artist comment section-->

    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
