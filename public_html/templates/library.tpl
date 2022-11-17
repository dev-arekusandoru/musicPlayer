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

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Page Heading -->
        <!-- Artists Heading -->
        <h1 class="h3 mb-4 content-title">My Artist Uploads:</h1>
        <!--Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->

            {if !empty($userArtists)}
                {foreach $userArtists as $a}
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/{$a['Image_URL']}" alt="{$a['Artist_Name']}">
                        </div>
                        <h1>{$a['Artist_Name']}</h1>
                    </div>
                {/foreach}
            {else}
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/empty-playlist.jpg" alt="Empty Album">
                    </div>
                    <h1>No Artists</h1>
                </div>
            {/if}
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Albums Heading -->
        <h1 class="h3 mb-4 content-title">My Album Uploads:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {if !empty($userAlbums)}
            {foreach $userAlbums as $a}
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/album-imgs/{$a['Image_URL']}" alt="{$a['Album_Name']}">
                    </div>
                    <h1>{$a['Album_Name']}</h1>
                    <h2>{$a['Artist_Name']} • {$a['Release_Year']}</h2>
                </div>
            {/foreach}
                {else}
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/empty-playlist.jpg" alt="No Albums">
                    </div>
                    <h1>No Albums</h1>
                </div>
            {/if}
        </div>

        <h1 class="h3 mb-4 content-title">My Song Uploads:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {if !empty($userSongs)}
                {foreach $userSongs as $song}
                    <a class="content" href="viewAlbum.php">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/{$song['Image_URL']}" alt="{$song['Album_Name']}">
                        </div>
                        <h1>{$song['Title']}</h1>
                        <h2>{$song['Artist_Name']} • {$song['Album_Name']}</h2>
                    </a>
                {/foreach}
            {else}
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/empty-playlist.jpg" alt="No Albums">
                    </div>
                    <h1>No Songs</h1>
                </div>
            {/if}
        </div>



    </div>
    <!-- /.container-fluid -->
{/block}