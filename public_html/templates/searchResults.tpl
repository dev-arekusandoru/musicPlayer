{extends "template.tpl"}
{block "title"}
    Search Results
{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-4 content-title">Search results for: {$searchterm}</h1>
        <!-- Recently Artists Heading -->
        <h1 class="h3 mb-4 content-title">Artists:</h1>
        <!-- Recently Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            {foreach $searchArtists as $artist}
                <a class="content" href="viewArtist.php?id={$artist['Artist_ID']}">
                    <div class="content-img">
                        <img class="img-fluid" src="img/artist-imgs/{$artist['Image_URL']}" alt="{$artist['Artist_Name']}">
                    </div>
                    <h1>{$artist['Artist_Name']}</h1>
                </a>
            {/foreach}
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Albums:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {foreach $searchAlbums as $album}
                <a class="content" href="viewAlbum.php?id={$album['Album_ID']}">
                    <div class="content-img">
                        <img class="img-fluid" src="img/album-imgs/{$album['Image_URL']}" alt="{$album['Album_Name']}">
                    </div>
                    <h1>{$album['Album_Name']}</h1>
                    <h2>{$album['Artist_Name']} • {$album['Release_Year']}</h2>
                </a>
            {/foreach}
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Songs:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {foreach $searchSongs as $song}
                <a class="content" href="viewAlbum.php?id={$song['Album_ID']}">
                    <div class="content-img">
                        <img class="img-fluid" src="img/album-imgs/{$song['Image_URL']}" alt="{$song['Album_Name']}">
                    </div>
                    <h1>{$song['Title']}</h1>
                    <h2>{$song['Artist_Name']} • {$song['Album_Name']}</h2>
                </a>
            {/foreach}
        </div>


    </div>
    <!-- /.container-fluid -->
{/block}