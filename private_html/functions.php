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

updateAlbumAverageRating(7);
