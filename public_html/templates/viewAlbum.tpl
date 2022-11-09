{extends "template.tpl"}

{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid" >

        <!--Delete button -->
        <!-- <div class="float-right relative-top">
             <a onclick="confirmAction()">
                 <img src="img/trashcan.png" alt="white trash can image" height="30" width="30">
             </a>
         </div>-->
        <!-- Album header like metadata and stuff -->
        <div class="row ml-md-2">
            <div class="album-metadata col-sm-12 p-0" >
                <img src="img/album-imgs/{$albumInfo['Image_URL']}" class="img-responsive artwork float-md-left mr-2" alt="">
                <h1>{$albumInfo['Album_Name']}</h1>
                <a href="viewArtist.php?id={$albumInfo['Artist_ID']}" class="link-to">{$albumInfo['Artist_Name']}</a>
                <h6>GENRE • {$albumInfo['Release_Year']}</h6>
                <div class=" ml-0 pl-0">
                    <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                </div>
                <div style="height: 15px;"></div>
                <a class="mb-7 add-music-button" href="addSong.php">Edit Album Details</a>
                <br>
                <a class="mb-7 add-music-button" href="addSong.php">Add Song</a>
                <br>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <!-- Album body like song names -->
        <div class="album-tracklist row">
            <div class="col-12">
                {foreach $songs as $song}
                    <div class="row album-song justify-content-between">
                        <div class="a-song-info">
                            <h1>{$song['Title']}</h1>
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
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                            View Comments
                                        </a>
                                        <a class="dropdown-item" href="viewAlbum.php">
                                            <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                            <i class="fa fa-folder-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                            View Album
                                        </a>
                                        <a class="dropdown-item" href="viewArtist.php">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            View Artist
                                        </a>
                                        <a class="dropdown-item" href="addSong.php">
                                            <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Add to playlist
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Remove from playlist
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>

        <div class="content-splitter"></div>

        <!--Start Album comment section-->
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
                                        <label for="rating">Rating</label><input type="text" id="rating" value="0">
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
        <!--End Album comment section-->
    </div>
    <!-- /.container-fluid -->
{/block}