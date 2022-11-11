{extends "template.tpl"}
{block "title"}My Library{/block}
{block "library"}
    <li class="nav-item active">
        <a class="nav-link" href="library.php">
            <i class="fas fa-folder-open    "></i>
            <span>My Library</span></a>
    </li>
{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- Artists Heading -->
        <h1 class="h3 mb-4 content-title">My Artists:</h1>
        <!--Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Asap-Rocky.jpg" alt="A$AP Rocky">
                </div>
                <h1>A$AP Rocky</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Andy-Mineo.jpg" alt="The Beatles">
                </div>
                <h1>Andy Mineo</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Arctic-Monkeys.jpeg" alt="The Beatles">
                </div>
                <h1>Arctic Monkeys</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Baby-Keem.jpeg" alt="The Beatles">
                </div>
                <h1>Baby Keem</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Backseat-Lovers.PNG" alt="The Beatles">
                </div>
                <h1>The Backseat Lovers</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Bad-Bunny.jpeg" alt="The Beatles">
                </div>
                <h1>Bad Bunny</h1>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/the-beatles.jpg" alt="The Beatles">
                </div>
                <h1>The Beatles</h1>
            </div>
            <div class="content">
                <a class="content-img" href="viewAlbum.tpl">
                    <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                </a>
                <h1>Gorillaz</h1>
            </div>
            <div class="content">
                <a class="content-img" href="viewAlbum.tpl">
                    <img class="img-fluid" src="img/artist-imgs/LivingTombstoneIcon.jpg" alt="">
                </a>
                <h1>The Living Tombstone</h1>
            </div>
            <div class="content">
                <a class="content-img" href="viewAlbum.tpl">
                    <img class="img-fluid" src="img/artist-imgs/TallyHall.jpg" alt="">
                </a>
                <h1>Tally Hall</h1>
            </div>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Albums Heading -->
        <h1 class="h3 mb-4 content-title">My Albums:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/testing-asap-rocky.jpeg" alt="The Beatles">
                </div>
                <h1>TESTING</h1>
                <h2>A$AP Rocky • 2018</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                </div>
                <h1>Cracker Island</h1>
                <h2>Gorillaz • 2023</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                </div>
                <h1>Marvin's Marvelous...</h1>
                <h2>Tally Hall • 2005</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                </div>
                <h1>zero_one</h1>
                <h2>The Living Tombstone • 2020</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                </div>
                <h1>Abbey Road</h1>
                <h2>The Beatles • 1969</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                </div>
                <h1>Marvin's Marvelous...</h1>
                <h2>Tally Hall • 2005</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                </div>
                <h1>zero_one</h1>
                <h2>The Living Tombstone • 2020</h2>
            </div>
            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                </div>
                <h1>Abbey Road</h1>
                <h2>The Beatles • 1969</h2>
            </div>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Playlists Heading -->
        <h1 class="h3 content-title">My Playlists:</h1>
        <a class="mb-4" href="addPlaylist.php">Create new</a>
        <!--Playlist Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- playlist content divs-->
            <a class="content" href="viewPlaylist.php">
                <div class="content-img">
                    <img class="img-fluid" src="img/empty-playlist.jpg" alt="The Beatles">
                </div>
                <h1>User's Playlist</h1>
                <h2>User • 3 Songs</h2>
            </a>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/empty-playlist.jpg" alt="">
                </div>
                <h1>User's Playlist</h1>
                <h2>User • 43 Songs</h2>
            </div>

            <div class="content">
                <div class="content-img">
                    <img class="img-fluid" src="img/empty-playlist.jpg" alt="The Beatles">
                </div>
                <h1>User's Playlist</h1>
                <h2>User • 15 Songs</h2>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
{/block}