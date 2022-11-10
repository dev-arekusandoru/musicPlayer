<?php
/* Smarty version 4.2.1, created on 2022-11-09 23:26:26
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewArtist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636c7d72792187_31660767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b14ea7dd71a160b30b37d168ebd7b222e10214' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewArtist.tpl',
      1 => 1668054352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636c7d72792187_31660767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1151380589636c7d7276a037_88082940', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_1151380589636c7d7276a037_88082940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1151380589636c7d7276a037_88082940',
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
        <h1 class="h3 mb-0 content-title"><?php echo $_smarty_tpl->tpl_vars['artist_name']->value;?>
:</h1>
        <h2 class="mb-1 artist-rating">Average Album Rating: </h2>
        <div class=" ml-0 pl-0">
            <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
            <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
            <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
            <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
            <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
        </div>
        <div style="height: 10px;"></div>
        <a class="mb-7 add-music-button" href="addAlbum.php">Add Album</a>
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
            <div class="comment col-md-6">
                <div class="comment-header">
                    <h1 class="row container ml-0 pl-0">User</h1>
                    <div class="row container ml-0 pl-0">
                        <h2 style="line-height: 27px" class="mr-1">Rating: </h2>
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    </div>
                </div>
                <div class="comment-body">
                    <p>This is where users will leave the details of their reviews,
                        explaining why they did or didn't like a particular song/album/playlist.
                        The user will also be able to edit their comments and delete them at any point</p>
                </div>

            </div>
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
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Write Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <!--                                        <label for="recipient-name" class="col-form-label">Rating:</label>-->
                                <!--                                        <input type="text" class="form-control" id="recipient-name">-->
                                <!--                                        Beginning Star Rating-->
                                <span class="rating_stars rating_0">
                                          <span class='s' data-low='0.5' data-high='1'><i class="fa fa-star-o"></i><i
                                                      class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                                          <span class='s' data-low='1.5' data-high='2'><i class="fa fa-star-o"></i><i
                                                      class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                                          <span class='s' data-low='2.5' data-high='3'><i class="fa fa-star-o"></i><i
                                                      class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                                          <span class='s' data-low='3.5' data-high='4'><i class="fa fa-star-o"></i><i
                                                      class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                                          <span class='s' data-low='4.5' data-high='5'><i class="fa fa-star-o"></i><i
                                                      class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>

                                          <span class='r r0_5' data-rating='1' data-value='0.5'></span>
                                          <span class='r r1' data-rating='1' data-value='1'></span>
                                          <span class='r r1_5' data-rating='15' data-value='1.5'></span>
                                          <span class='r r2' data-rating='2' data-value='2'></span>
                                          <span class='r r2_5' data-rating='25' data-value='2.5'></span>
                                          <span class='r r3' data-rating='3' data-value='3'></span>
                                          <span class='r r3_5' data-rating='35' data-value='3.5'></span>
                                          <span class='r r4' data-rating='4' data-value='4'></span>
                                          <span class='r r4_5' data-rating='45' data-value='4.5'></span>
                                          <span class='r r5' data-rating='5' data-value='5'></span>
                                        </span>

                                <div class="values">
                                    <div>
                                        <label for="rating">Rating</label><input type="text" id="rating"
                                                                                 value="0">
                                    </div>
                                </div>
                                <!--                                        End Star Rating-->
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Review:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit Review</button>
                    </div>
                </div>
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
