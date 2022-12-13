{extends "template.tpl"}
{block "title"}{$albumInfo['Album_Name']}{/block}
{block "content"}
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
                <img src="img/album-imgs/{$albumInfo['Image_URL']}" class="img-responsive artwork float-md-left mr-2"
                     alt="">
                <h1>{$albumInfo['Album_Name']}</h1>
                <a href="viewArtist.php?id={$albumInfo['Artist_ID']}" class="link-to">{$albumInfo['Artist_Name']}</a>
                <h6>GENRE • {$albumInfo['Release_Year']}</h6>
                <div class=" ml-0 pl-0">
                    {for $i = 0; $i < floor($albumInfo['Avg_Rating']/2); $i++}
                        <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                    {/for}
                    {if fmod($albumInfo['Avg_Rating'], 2) eq 1}
                        <img src="img/HalfDisc.jpg" class="rating-disc" alt="HalfDisc">
                    {elseif $albumInfo['Avg_Rating'] == 0}
                        <h6>NO RATINGS</h6>
                    {/if}
                </div>
                <div style="height: 15px;"></div>
                <a class="mb-7 add-music-button" href="#">Edit Album Details</a>
                <br>
                <a class="mb-7 add-music-button" href="addSong.php?arid={$albumInfo['Artist_ID']}&abid={$albumInfo['Album_ID']}">Add Song</a>
                <br>
            </div>
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
                                        {if $smarty.session.isAdmin eq 1}
                                        <a class="dropdown-item"
                                           href="addSong.tpl?arid={$albumInfo['Artist_ID']}&abid={$albumInfo['Album_ID']}&sid={$song['Song_ID']}">
                                            <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Edit Song Details
                                        </a>
                                        {/if}
                                        <a class="dropdown-item" href="viewArtist.php?id={$albumInfo['Artist_ID']}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            View Artist
                                        </a>
                                        <a class="dropdown-item" href="addSong.php">
                                            <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Add to playlist
                                        </a>
                                        {if $smarty.session.isAdmin eq 1}
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="deleteSong.php?id={$albumInfo['Song_ID']}">
                                            <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Delete Song
                                        </a>
                                        {/if}
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
            {foreach $reviews as $review}
                <div class="comment col-md-6">
                    <div class="comment-header">
                        <h1 class="row container ml-0 pl-0">{ucfirst($review['First_Name'])} {ucfirst($review['Last_Name'])}</h1>
                        <div class="row container ml-0 pl-0">
                            <h2 style="line-height: 27px" class="mr-1">Rating: </h2>
                            {for $i = 0; $i < floor($review['Stars']/2); $i++}
                                <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
                            {/for}
                            {if fmod($review['Stars'], 2) eq 1}
                                <img src="img/HalfDisc.jpg" class="rating-disc" alt="HalfDisc">
                            {/if}
                        </div>
                    </div>
                    <div class="comment-body">
                        <p>{$review['Comment']}</p>
                    </div>

                </div>
            {/foreach}
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
                        <input type='hidden' name='albumID' value="{$albumInfo['Album_ID']}"/>
                    </div>
                </form>
            </div>
        </div>
        <!--End Album comment section-->
    </div>
    <!-- /.container-fluid -->
{/block}