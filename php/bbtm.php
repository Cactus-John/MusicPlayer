
<?php
    $i = 1;
    $song_playlist = [
        "../music/Real Life.mp3",
        "../music/Losers.mp3",
        "../music/Tell Your Friends.mp3",
        "../music/Often.mp3",
        "../music/The Hills.mp3",
        "../music/Acquainted.mp3",
        "../music/Can't Feel My Face.mp3",
        "../music/Shameless.mp3",
        "../music/Earned It.mp3",
        "../music/In The Night.mp3",
        "../music/As You Are.mp3",
        "../music/Dark Times.mp3",
        "../music/Prisoner.mp3",
        "../music/Angel.mp3"
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
    <title>BEAUTY BEHIND THE MADNESS</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body class = "bgcolor-bbtm">
    <div class="topnav">
        <a href="index.php">HOME</a>
        <h1>BEAUTY BEHIND THE MADNESS</h1>
    </div>

    <img class = "img_bbtm">

    <ul>
        <?php
            foreach ($song_files as $song) {
                $song_title = $song_titles[array_search($song, $song_files)];
                echo '<li class = "song-text-dawn"><audio class = "audio-container" controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
                $i++;
            }
        ?>
    </ul>
</body>
</html>