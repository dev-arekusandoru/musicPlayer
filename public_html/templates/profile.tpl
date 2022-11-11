{extends "template.tpl"}
{block "profile"}
    <li class="nav-item active">
        <a class="nav-link" href="profile.php">
            <i class="fas fa-user fa-tachometer-alt"></i>
            <span>My Profile</span></a>
    </li>
{/block}


{block "content"}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <img class="artwork float-left pfp" src="img/pfp/blank.png">
        <h1>Account Name</h1>

        <div class="buttons">
            <!-- Change Password -->
            <button class="open-button pfpbutton" onclick="openForm()">Change Password</button>

            <!--Upload PFP Image -->
            <input type="file" id="imgupload" style="display:none">
            <label for='imgupload'> <input type="file" id="myFile" name="filename"></label>
        </div>

        <!-- change password popup -->
        <div class="form-popup" id="myForm">
            <form class="form-container" method="post" action="profile.php">
                <label for="newPassword"><b>New password</b></label>
                <input type="password" placeholder="Enter New password" id="newPassword" name="newPassword" required>

                <label for="verifyPassword"><b>Verify password</b></label>
                <input type="password" placeholder="Verify password" id="verifyPassword" name="verifyPassword" required>

                <input type="submit" class="btn" value="submit" name="changepw">
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
        </div>

        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>

        <br><br><br><br>
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>Songs Uploaded:</th>
                <th>15</th>
            </tr>
            <tr>
                <th>Artists Uploaded:</th>
                <th>8</th>
            </tr>
            <tr>
                <th>Album Uploaded:</th>
                <th>1</th>
            </tr>
            <tr>
                <th>Playlist Created:</th>
                <th>0</th>
            </tr>
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->
{/block}