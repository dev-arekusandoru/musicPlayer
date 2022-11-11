{extends "template.tpl"}
{block "title"}View Playlist{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!--Delete button -->
        <div class="float-right relative-top">
            <a onclick="confirmAction()">
                <img src="img/trashcan.png" alt="white trash can image" height="30" width="30">
            </a>
        </div>

        <!-- Playlist Information -->
        <div class="row ml-md-2">
            <div class="album-metadata col-sm-12 p-0">
                <img src="img/empty-playlist.jpg" class="img-responsive artwork float-md-left" alt="">
                <h1>TESTING</h1>
                <h2>User</h2>
                <h6>Playlist description</h6>
                <div style="height: 5px;"></div>
                <a class="mb-7 add-music-button" href="addSong.php">Edit Album Details</a>
                <br>
                <a class="mb-7 add-music-button" href="addSong.php">Add Song</a>
            </div>
            <div class="col-sm-6"></div>
        </div>

        <!-- Playlist Tracklist -->
        <div class="album-tracklist row">
            <div class="col">
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
                                    <a class="dropdown-item">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400" ></i>
                                        <p name="remove">Remove from playlist</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
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
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
{/block}