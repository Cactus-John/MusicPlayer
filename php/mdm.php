
<?php
    $i = 1;
    $song_playlist = [
        "../music/Call Out My Name.mp3",
        "../music/Try Me.mp3",
        "../music/Wasted Times.mp3",
        "../music/I Was Never There.mp3",
        "../music/Hurt You.mp3",
        "../music/Privilege.mp3",
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
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
    <link rel="stylesheet" type="text/css" href="../css/style-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body>
    <div class="topnav">
        <a href="index.php">HOME</a>
        <h1>MY DEAR MELANCHOLY,</h1>
    </div>

    <img class = "img_mdm">

    <ul>
        <?php
            foreach ($song_files as $song) {
                $song_title = $song_titles[array_search($song, $song_files)];
                echo '<li class = "song-text-mdm"><audio class = "audio-container" controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
                $i++;
            }
        ?>
    </ul>
</body>
</html>