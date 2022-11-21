{extends "template.tpl"}
{block "title"}View Playlist{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Playlist Information -->
        <div class="row ml-md-2">
            <div class="album-metadata col-sm-12 p-0">
                <img src="img/playlist-imgs/{$playlistInfo['Image_URL']}" class="img-responsive artwork float-md-left mr-2"
                     alt="">
                <h1>{$playlistInfo['Playlist_Name']}</h1>
                <h2>{$playlistInfo['First_Name']} {$playlistInfo['Last_Name']}</h2>
                <h6>{$playlistInfo['Description']}</h6>
                <a class="mb-7 add-music-button" href="#">Edit Details</a>
                <br>
                <a class="mb-7 add-music-button" href="">Add Song</a>
                <br>
            </div>
            <div class="col-sm-6"></div>
        </div>

        <!-- Playlist Tracklist -->
        <div class="album-tracklist row">
            <div class="col">
                {foreach $songs as $s}
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>{$s['Title']}</h1>
                        <p>{$s['Artist_Name']} • {$s['Album_Name']}</p>
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
                                           href="addSong.tpl?arid={$playlistInfo['Artist_ID']}&abid={$playlistInfo['Album_ID']}&sid={$song['Song_ID']}">
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
                                        <a class="dropdown-item" href="deleteSong.php?id={$playlistInfo['Song_ID']}">
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
        <!-- /.container-fluid -->
    </div>
{/block}