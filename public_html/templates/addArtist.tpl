{extends "template.tpl"}
{block "title"}Add Artist{/block}
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
                <a class="collapse-item active" href="addArtist.php">Artist</a>
                <a class="collapse-item" href="addAlbum.php">Album</a>
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
            <h1 class="content-title">Add Artist</h1>
        </div>
        <!-- Add Artist forms and stuff-->
        <div class="row">
            <form class="row" action="addArtist.php" method="post" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="addArtistImg" src="img/pfp/blank.png" alt="">
                    <input type="file" id="addArtistFile" name="img" accept=".jpg,.jpeg,.png" required onchange=file_changed()>
                    <script>
                        function file_changed(){
                            var selectedFile = document.getElementById('addArtistFile').files[0];
                            var img = document.getElementById('addArtistImg')

                            var reader = new FileReader();
                            reader.onload = function(){
                                img.src = this.result
                            }
                            reader.readAsDataURL(selectedFile);
                        }

                    </script>
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="artist-name">Artist Name:</label>
                    <br>
                    <input class="add-input" name="artist" id="artist-name" type="text" required>
                    <br>
                    <input type="submit" value="Submit" class="add-submit">
                </div>
            </form>
        </div>


    </div>
    <!-- /.container-fluid -->
{/block}