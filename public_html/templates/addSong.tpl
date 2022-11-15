{extends "template.tpl"}
{block "title"}Add Song{/block}
{block "add"}
    <!-- Nav Item - Add Music Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-music"></i>
            <span>Add Music</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Add Music:</h6>
                <a class="collapse-item" href="addArtist.php">Artist</a>
                <a class="collapse-item" href="addAlbum.php">Album</a>
                <a class="collapse-item active" href="addSong.php">Song</a>
            </div>
        </div>
    </li>
{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Add Song</h1>
        </div>
        <!-- Add song form content-->
        <div class="row">
            <form class="row" method="post" action="addSong.php" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="add-img" src="img/empty-playlist.jpg" alt="">
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="select-artist">Artist Name:</label>
                    <br>
                    <select required name="select-artist" class="add-dropdown" id="select-artist">
                        <option disabled>Select an Artist</option>
                        {foreach $artists as $artist}
                            <option value="{$artist['Artist_ID']}">{$artist['Artist_Name']}</option>
                        {/foreach}
                    </select>
                    <script>
                        {if isset($setArtist)}
                        if ({$setArtist} != null) {
                            let element = document.getElementById("select-artist");
                            element.value = {$setArtist};
                        }
                        {/if}
                    </script>
                    <br>
                    <label class="add-label" for="select-album">Album Name:</label>
                    <br>
                    <select required name="select-album" class="add-dropdown form-select" id="select-album"
                            disabled="true">
                    </select>
                    <a href="addAlbum.php" class="add-music-button" id="add-btn" hidden="true">Add Album</a>
                    <script>
                        $(document).ready(
                            function () {
                                $('#select-artist').on('change', function () {
                                    let artist = $("#select-artist option:selected")[0];
                                    $.ajax({
                                        url: "ajaxArtistList.php",
                                        type: "post",
                                        data: {
                                            "artistID": $(artist).val()
                                        },
                                        dataType: "html",
                                        success: function (data) {
                                            $('#select-album').html(data);
                                            $('#select-album').prop('disabled', false);

                                            $('#add-img').attr('src', "img/empty-playlist.jpg");

                                            if (data === "<option disabled>No Albums</option>") {
                                                $('#add-btn').prop('hidden', false)
                                                $('#add-btn').attr("href", "addAlbum.php?id=" + $(artist).val());
                                            }

                                        }
                                    })
                                });
                                $('#select-album').on('change', function () {
                                    let album = $("#select-album option:selected")[0];
                                    $.ajax({
                                        url: "ajaxArtistList.php",
                                        type: "post",
                                        data: {
                                            "albumID": $(album).val()
                                        },
                                        dataType: "html",
                                        success: function (data) {
                                            $('#add-img').attr('src', data);
                                        }
                                    })
                                });
                                {if isset($setAlbum)}
                                if ({$setAlbum} != null) {
                                    let artist = $("#select-artist option:selected")[0];
                                    $.ajax({
                                        url: "ajaxArtistList.php",
                                        type: "post",
                                        data: {
                                            "artistID": $(artist).val()
                                        },
                                        dataType: "html",
                                        success: function (data) {
                                            $('#select-album').html(data);
                                            $('#select-album').prop('disabled', false);
                                            $('#select-album').val({$setAlbum});
                                        }
                                    });
                                    $.ajax({
                                        url: "ajaxArtistList.php",
                                        type: "post",
                                        data: {
                                            "albumID": {$setAlbum}
                                        },
                                        dataType: "html",
                                        success: function (data) {
                                            $('#add-img').attr('src', data);
                                        }
                                    })
                                }
                                {/if}
                            }
                        );

                    </script>
                    <br>
                    <label class="add-label" for="song-name">Song Name:</label>
                    <br>
                    <input class="add-input" name="song-name" id="song-name" type="text">
                    <br>
                    <input type="submit" value="Submit" class="add-submit">
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
{/block}