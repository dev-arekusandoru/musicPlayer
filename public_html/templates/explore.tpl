{extends "template.tpl"}
{block "title"}
    Explore
{/block}
{block "explore"}
    <li class="nav-item active">
        <a class="nav-link" href="explore.php">
            <i class="fas fa-compass"></i>
            <span>Explore</span></a>
    </li>
{/block}
{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Recently Artists Heading -->
        <h1 class="h3 mb-4 content-title">Recently Uploaded Artists:</h1>
        <!-- Recently Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            {foreach $recentArtists as $ra}
            <a class="content" href="viewArtist.php?id={$ra['Artist_ID']}">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/{$ra['Image_URL']}" alt="{$ra['Artist_Name']}">
                </div>
                <h1>{$ra['Artist_Name']}</h1>
            </a>
            {/foreach}
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Recently Uploaded Albums:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {foreach $recentAlbums as $ras}
            <a class="content" href="viewAlbum.php?id={$ras['Album_ID']}">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/{$ras['Image_URL']}" alt="{$ras['Album_Name']}">
                </div>
                <h1>{$ras['Album_Name']}</h1>
                <h2>{$ras['Artist_Name']} • {$ras['Release_Year']}</h2>
            </a>
            {/foreach}
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Alltime Artists Heading -->
        <h1 class="h3 mb-4 content-title">Top All-time Artists:</h1>
        <!--Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            {foreach $topArtists as $artist}
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

        <!-- Albums Heading -->
        <h1 class="h3 mb-4 content-title">Top All-time Albums:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {foreach $topAlbums as $album}
            <a class="content" href="viewAlbum.php?id={$album['Album_ID']}">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/{$album['Image_URL']}" alt="{$album['Album_Name']}">
                </div>
                <h1>{$album['Album_Name']}</h1>
                <h2>{$album['Artist_Name']} • {$album['Release_Year']}</h2>
            </a>
            {/foreach}
        </div>


    </div>
    <!-- /.container-fluid -->
{/block}