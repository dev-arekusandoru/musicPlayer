<?php
/**
 * @var $smarty
 * @var $pdo
 */

function updateAlbumAverageRating($aid) {
    /**
     * @var $smarty
     * @var $pdo
     */
    include_once "../private_html/config.php";
    include PRIVATE_PATH . "dbConfig.php";
    $albumID = $aid;
    $newAlbumAvg = 0;
    $ratings = [];

    $sql = "SELECT Stars FROM Review JOIN Album_Review ON Review_ID=Album_Review.Review_FK JOIN Album ON Album.Album_ID=Album_Review.Album_FK WHERE Album.Album_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $albumID);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $ratings[] = $row['Stars'];
    }

    if(count($ratings) != 0) {
        foreach ($ratings as $rating) {
            $newAlbumAvg += $rating;
        }

        $newAlbumAvg /= count($ratings);
    }

    $sql = "UPDATE Album SET Avg_Rating=:rating WHERE Album_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $albumID);
    $stmt->bindParam(":rating", $newAlbumAvg);
    $stmt->execute();


}

function updateArtistAverageRating($aid) {
    /**
     * @var $smarty
     * @var $pdo
     */
    include_once "../private_html/config.php";
    include PRIVATE_PATH . "dbConfig.php";
    $artistID = $aid;
    $newArtistAvg = 0;
    $ratings = [];

    $sql = "SELECT Stars FROM Review JOIN Artist_Review ON Review_ID=Artist_Review.Review_FK JOIN Artist ON Artist.Artist_ID=Artist_Review.Artist_FK WHERE Artist.Artist_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $artistID);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $ratings[] = $row['Stars'];
    }

    if(count($ratings) != 0) {
        foreach ($ratings as $rating) {
            $newArtistAvg += $rating;
        }

        $newArtistAvg /= count($ratings);
    }

    $sql = "UPDATE Artist SET Average_Rating=:rating WHERE Artist_ID=:id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $artistID);
    $stmt->bindParam(":rating", $newArtistAvg);
    $stmt->execute();
}

function RandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}