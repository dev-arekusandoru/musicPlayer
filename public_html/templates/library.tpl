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
            {foreach $userPlaylists as $p}
                <a class="content" href="viewPlaylist.php?id={$p['Playlist_ID']}">
                    <div class="content-img">
                        <img class="img-fluid" src="img/playlist-imgs/{$p['Image_URL']}" alt="{$p['Playlist_Name']}">
                    </div>
                    <h1>{$p['Playlist_Name']}</h1>
                    {if $p['Song_Count'] == 1}
                        <h2>{$p['Song_Count']} Song</h2>
                    {else}
                        <h2>{$p['Song_Count']} Songs</h2>
                    {/if}
                </a>
            {/foreach}
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
                    <a class="content" href="viewArtist.php?id={$a['Artist_ID']}">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/{$a['Image_URL']}" alt="{$a['Artist_Name']}">
                        </div>
                        <h1>{$a['Artist_Name']}</h1>
                    </a>
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
                    <a class="content" href="viewAlbum.php?id={$a['Album_ID']}">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/{$a['Image_URL']}" alt="{$a['Album_Name']}">
                        </div>
                        <h1>{$a['Album_Name']}</h1>
                        <h2>{$a['Artist_Name']} • {$a['Release_Year']}</h2>
                    </a>
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

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <h1 class="h3 mb-4 content-title">My Song Uploads:</h1>
        <!--Songs Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- song content divs-->
            {if !empty($userSongs)}
                {foreach $userSongs as $song}
                    <a class="content" href="viewAlbum.php?id={$song['Album_ID']}">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/{$song['Image_URL']}"
                                 alt="{$song['Album_Name']}">
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