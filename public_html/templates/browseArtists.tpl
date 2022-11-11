{extends "template.tpl"}
{block "title"}Browse Artists{/block}
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
                <a class="collapse-item active" href="browseArtists.php">Artists</a>
                <a class="collapse-item" href="browseAlbums.php">Albums</a>
            </div>
        </div>
    </li>
{/block}
{block "content"}
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 content-title">Browse All Artists:</h1>
    <!--Page Content-->
    <div class="row pl-3 pr-3 justify-content-around">
        <!-- artist content divs-->

        {foreach $artists as $artist}
            <a class="content" href="viewArtist.php?id={$artist['Artist_ID']}">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/{$artist['Image_URL']}" alt="{$artist['Artist_Name']}">
                </div>
                <h1>{$artist['Artist_Name']}</h1>
            </a>
        {/foreach}

    </div>

</div>
<!-- /.container-fluid -->
{/block}