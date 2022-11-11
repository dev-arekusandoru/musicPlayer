{extends "template.tpl"}
{block "title"}Add Album{/block}
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
                <a class="collapse-item active" href="addAlbum.php">Album</a>
                <a class="collapse-item" href="addSong.php">Song</a>
            </div>
        </div>
    </li>
{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Add Album</h1>
        </div>
        <!-- Add album content-->
        <div class="row">
            <form class="row" method="post" action="addAlbum.php" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="addAlbumImg" src="img/pfp/blank.png" alt="album-cover" >
                    <input type="file" id="addAlbumFile" name="img" onchange=file_changed() accept=".png,.jpg,.jpeg" required>
                    <script>
                        function file_changed(){
                            var selectedFile = document.getElementById('addAlbumFile').files[0];
                            var img = document.getElementById('addAlbumImg')

                            var reader = new FileReader();
                            reader.onload = function(){
                                img.src = this.result
                            }
                            reader.readAsDataURL(selectedFile);
                        }

                    </script>
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="select-artist">Artist Name:</label>
                    <br>
                    <select required name="select-artist" class="add-dropdown" id="select-artist">
                        {foreach $artists as $artist}
                            <option value="{$artist['Artist_ID']}">{$artist['Artist_Name']}</option>
                        {/foreach}
                    </select>
                    <br>
                    <label class="add-label" for="album-name">Album Name:</label>
                    <br>
                    <input class="add-input" name="album" id="album-name" type="text" required>
                    <br>
                    <label class="add-label" for="release-year">Release Year:</label>
                    <br>
                    <input class="add-input" name="release-year" id="release-year" type="number" max="9999" min="1"
                           onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                    <br>
                    <input type="submit" value="Submit" class="add-submit">
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
{/block}