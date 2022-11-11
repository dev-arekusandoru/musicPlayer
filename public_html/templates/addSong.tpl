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
        <form class="row" method="post" action="addSongToDB.php">
            <div class="add-img-div">
                <img class="add-img" src="img/pfp/blank.png" alt="">
                <input type="file" id="myFile" name="filename">
            </div>
            <div class="add-content-div">
                <label class="add-label" for="select-artist">Artist Name:</label>
                <br>
                <select required name="select-artist" class="add-dropdown" id="select-artist">
                    <option>A$AP Rocky</option>
                    <option>Andy Mineo</option>
                    <option>Arctic Monkeys</option>
                    <option>Baby Keem</option>
                    <option>The Backseat Lovers</option>
                    <option>Bad Bunny</option>
                </select>
                <br>
                <label class="add-label" for="select-album">Album Name:</label>
                <br>
                <select required name="select-album" class="add-dropdown" id="select-album">
                    <option>Testing</option>
                </select>
                <br>
                <label class="add-label" for="song-name">Song Name:</label>
                <br>
                <input class="add-input" id="song-name" type="text">
                <br>
                <input type="submit" value="Submit" class="add-submit">
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
{/block}