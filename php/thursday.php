
<?php
    $i = 1;
    $song_playlist = [
        "../music/Lonely Star.mp3",
        "../music/Life Of The Party.mp3",
        "../music/Thursday.mp3",
        "../music/The Zone.mp3",
        "../music/The Birds Pt. 1.mp3",
        "../music/The Birds Pt. 2.mp3",
        "../music/Coming Down.mp3",
        "../music/Rolling Stone.mp3",
        "../music/Heaven Or Las Vegas.mp3",
    ];
    $song_titles = [];
    $song_files = [];

    foreach ($song_playlist as $song) {
        $song_titles[] = str_replace("../music/", "", $song);
        $song_files[] = $song;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THURSDAY</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">

</head>

<body class = "bgcolor">
    <div class = "background-animation-thursday">
        <div class="topnav">
            <a href="index.php">HOME</a>
        </div>
    </div>
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