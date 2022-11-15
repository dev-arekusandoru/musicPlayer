<?php
/**
 * @var $smarty
 * @var $pdo
 *
 */
include "../private_html/config.php";
include_once PRIVATE_PATH . "dbConfig.php";
include_once PRIVATE_PATH . "functions.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] == 0) {
    $_SESSION['page_to_load'] = "addAlbum.php";
    $smarty->display("userLogin.tpl");
} else {
    $artists = array();
    $sql = "SELECT Artist_ID, Artist_Name, Image_URL FROM Artist";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $artists[$row['Artist_Name']] = $row;
    }
    ksort($artists);

    if (isset($_POST['album'])) {
        $album_name = "";
        $album_img = "";
        $release_year = 0;
        $artist_fk = 0;
        $artist_name = "";

        // set all the values for db insert
        $artist_fk = intval($_POST['select-artist']);
        foreach ($artists as $artist) {
            if ($artist['Artist_ID'] == $artist_fk) {
                $artist_name = $artist['Artist_Name'];
            }
        }

        ksort($artists);

        if (isset($_POST['album'])) {
            $album_name = "";
            $album_img = "";
            $release_year = 0;
            $artist_fk = 0;
            $artist_name = "";

            // set all the values for db insert
            $artist_fk = intval($_POST['select-artist']);
            foreach ($artists as $artist) {
                if ($artist['Artist_ID'] == $artist_fk) {
                    $artist_name = $artist['Artist_Name'];
                }
            }
            $album_name = $_POST['album'];
            $album_img = implode("-", explode(" ", $artist_name)) . "-" . implode("-", explode(" ", $album_name)) . "." . substr($_FILES['img']["type"], 6);
            $release_year = $_POST['release-year'];

            $targetDirImg = "img/album-imgs";
            $targetFile = $targetDirImg . "/" . $album_img;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOK = 1;

            // Check if image file is a actual image or fake image
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
            if ($uploadOK == 0) {
                echo '<script>alert("Sorry, your submission was not uploaded. Make sure your image is valid and the album does not already exist under the artist.")</script>';
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
                    $sql = "INSERT INTO Album (Album_Name, Image_URL, Release_Year, Artist_FK, Avg_Rating)
            VALUES (:name, :img, :year, :afk, 0)";

                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":name", $album_name);
                    $stmt->bindParam(":img", $album_img);
                    $stmt->bindParam(":year", $release_year);
                    $stmt->bindParam(":afk", $artist_fk);
                    try {
                        $stmt->execute();
                    } catch (Exception $exception) {
                        echo '<script>alert("Sorry, your submission was not uploaded. Make sure the artist does not already exist. ")</script>';
                        exit;
                    }
                    echo '<script>alert("Upload Successful!")</script>';
                }
            }

        }
    }


    if(isset($_GET['id'])) {
        $smarty->assign("setArtist", $_GET['id']);
    }
    $smarty->assign("artists", $artists);
    $smarty->display("addAlbum.tpl");
}
