{extends "template.tpl"}
{block "title"}Browse Albums{/block}
{block "browse"}
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
           aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-th-large"></i>
            <span>Browse All</span>
        </a>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Browse All:</h6>
                <a class="collapse-item" href="browseArtists.php">Artists</a>
                <a class="collapse-item active" href="browseAlbums.php">Albums</a>
            </div>
        </div>
    </li>
{/block}

{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 content-title">Browse All Albums:</h1>

        <!--Page Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            {foreach $albums as $album}
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