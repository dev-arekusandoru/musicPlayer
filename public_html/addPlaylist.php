<?php
/**
 * @var $smarty
 * @var $pdo
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "addPlaylist.php";
    $smarty->display("userLogin.tpl");
} else {
    $playlist_name = "";
    $playlist_desc = "";
    $playlist_img = "";

    if (isset($_POST['playlist']) && !empty($_POST['playlist'])) {
        $uploadOK = 1;
        $playlist_name = $_POST['playlist'];
        if ($_FILES['img']['error'] == 0) {
            $playlist_img = implode("-", explode(" ", $playlist_name)) . "." . substr($_FILES["img"]["type"], 6);
        } else {
            $playlist_img = "empty-playlist.jpg";
            $uploadOK = 2;
        }
        $playlist_desc = $_POST['description'];

        $targetDirImg = "img/playlist-imgs";
        $targetFile = $targetDirImg . "/" . $playlist_img;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if ($_FILES['img']['error'] == 0) {
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["img"]["tmp_name"]);
                if ($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    // echo "File is not an image.";
                    $uploadOK = 0;
                }
            }

            // Check if file already exists
            if (file_exists($targetFile)) {
                $uploadOK = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $uploadOK = 0;
            }
        }

        if ($uploadOK == 0) {
            echo '<script>alert("Please make sure to submit a valid file.")</script>';
        } else {
            if ($uploadOK != 2) {
                move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);
            }
            //db integration
            $sql = "INSERT INTO Playlist (Playlist_Name, Description, Image_URL) VALUES (:name, :desc, :img)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $playlist_name);
            $stmt->bindParam(":desc", $playlist_desc);
            $stmt->bindParam(":img", $playlist_img);
            try {
                $stmt->execute();

                //find the id of the song
                $sql = "SELECT Playlist_ID FROM Playlist ORDER BY Playlist_ID DESC LIMIT 1;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $playlistID = $stmt->fetch(PDO::FETCH_ASSOC)['Playlist_ID'];

                $sql = "INSERT INTO User_Playlist (User_FK, Playlist_FK) VALUES (:uid, :pid)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":uid", $_SESSION['userid']);
                $stmt->bindParam(":pid", $playlistID);
                $stmt->execute();

            } catch (Exception $e) {
                echo '<script>alert("Upload unsuccessful.")</script>';
            }
            // if everything is ok, try to upload file
            echo '<script>alert("Upload successful.")</script>';
        }
    }
    $smarty->display("addPlaylist.tpl");
}