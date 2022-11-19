{extends "template.tpl"}
{block "title"}Add Playlist{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Create Playlist</h1>
        </div>
        <!-- Add Playlist form content -->
        <div class="row">
            <form class="row" action="addPlaylist.php" method="post" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="add-img" src="img/empty-playlist.jpg" alt="">
                    <input type="file" id="addPlaylistFile" name="img" accept=".jpg,.jpeg,.png" onchange=file_changed()>
                    <script>
                        function file_changed(){
                            var selectedFile = document.getElementById('addPlaylistFile').files[0];
                            var img = document.getElementById('add-img')

                            var reader = new FileReader();
                            reader.onload = function(){
                                img.src = this.result
                            }
                            reader.readAsDataURL(selectedFile);
                        }
                    </script>
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="playlist-name">Playlist Name:</label>
                    <br>
                    <input class="add-input" name="playlist" id="playlist-name" type="text" required>
                    <br>
                    <label class="add-label" for="playlist-description">Description:</label>
                    <br>
                    <textarea class="add-input" style="height: 100px; resize: none;" name="description" id="playlist-description"></textarea>
                    <br>
                    <input type="submit" value="Submit" class="add-submit">
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
{/block}