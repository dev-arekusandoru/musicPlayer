{extends "template.tpl"}
{block "title"}{$artist_info['Artist_Name']}{/block}
{block "content"}
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
        <h1 class="h3 mb-0 content-title">{$artist_info['Artist_Name']}:</h1>
        <h2 class="mb-1 artist-rating">Average Album Rating: </h2>
        <div class=" ml-0 pl-0">
            {for $i = 0; $i < floor($artist_info['Average_Rating']/2); $i++}
                <img src="img/FullDisc.jpg" class="rating-disc" alt="FullDisc">
            {/for}
            {if fmod($artist_info['Average_Rating'], 2) eq 1}
                <img src="img/HalfDisc.jpg" class="rating-disc" alt="HalfDisc">
            {elseif $artist_info['Average_Rating'] == 0}
                <h6>NO RATINGS</h6>
            {/if}
        </div>
        <div style="height: 10px;"></div>
        <a class="mb-7 add-music-button" href="addAlbum.php?id={$artist_info['Artist_ID']}">Add Album</a>
        <!--Page Content-->
        <!-- Artist Discography  -->
        <div class="row mt-4 pl-3 pr-3 justify-content-around">
            {foreach $albums as $album}
                <a class="content" href="viewAlbum.php?id={$album['Album_ID']}">
                    <div class="content-img">
                        <img class="img-fluid" src="img/album-imgs/{$album['Image_URL']}" alt="{$album['Album_Name']}">
                    </div>
                    <h1>{$album['Album_Name']}</h1>
                    <h2>{$album['Release_Year']}</h2>
                </a>
            {/foreach}
        </div>

        <div class="content-splitter"></div>

        <!--Start Artist comment section-->
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
                        <input type='hidden' name='artistID' value="{$artist_info['Artist_ID']}"/>
                    </div>
                </form>
            </div>
        </div>
        <!--End Artist comment section-->

    </div>
    <!-- /.container-fluid -->
{/block}