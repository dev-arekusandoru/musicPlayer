{extends "template"}
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
            <form class="row" method="post" action="addPlaylistToDB.php">
                <div class="add-img-div">
                    <img class="add-img" src="img/pfp/blank.png" alt="">
                    <input type="file" id="myFile" name="filename">
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="playlist-name">Playlist Name:</label>
                    <br>
                    <input class="add-input" id="playlist-name" type="text">
                    <br>
                    <label class="add-label" for="playlist-description">Description:</label>
                    <br>
                    <textarea class="add-input" style="height: 100px; resize: none;" id="playlist-description" ></textarea>
                    <br>
                    <input type="submit" value="Submit" class="add-submit">
                </div>
            </form>
        </div>


    </div>
    <!-- /.container-fluid -->
{/block}