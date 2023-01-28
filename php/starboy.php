
<?php
    $i = 1;
    $song_playlist = [
        "../music/Starboy.mp3",
        "../music/Party Monster.mp3",
        "../music/False Alarm.mp3",
        "../music/Reminder.mp3",
        "../music/Rockin.mp3",
        "../music/Secrets.mp3",
        "../music/True Colors.mp3",
        "../music/Stargirl Interlude.mp3",
        "../music/Sidewalks.mp3",
        "../music/Six Feet Under.mp3",
        "../music/Love To Lay.mp3",
        "../music/A Lonely Night.mp3",
        "../music/Attention.mp3",
        "../music/Ordinary Life.mp3",
        "../music/Nothing Without You.mp3",
        "../music/All I Know.mp3",
        "../music/Die For You.mp3",
        "../music/I Feel It Coming.mp3",
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
    <title>STARBOY</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body>
    <div class="topnav">
        <a href="index.php">HOME</a>
    </div>

    <img class = "img_starboy">

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