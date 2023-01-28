<?php
    $i = 1;
    $song_playlist = [
        "../music/Professional.mp3",
        "../music/The Town.mp3",
        "../music/Adaptation.mp3",
        "../music/Love In The Sky.mp3",
        "../music/Belong To The World.mp3",
        "../music/Live For.mp3",
        "../music/Wanderlust.mp3",
        "../music/Kiss Land.mp3",
        "../music/Pretty.mp3",
        "../music/Tears In The Rain.mp3"
    ];
    $song_titles = [];
    $song_files = [];

    foreach ($song_playlist as $song) {
        $song_titles[] = str_replace("../music/", "", $song);
        $song_files[] = $song;
    }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KISS LAND</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body>
    <div class="topnav">
        <a href="index.php">HOME</a>
    </div>

    <img class = "img_kissland">

    <ul>
        <?php
            foreach ($song_files as $song) {
                $song_title = $song_titles[array_search($song, $song_files)];
                echo '<li class = "song-text"><audio controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
                $i++;
            }
        ?>
    </ul>
</body>
</html>
