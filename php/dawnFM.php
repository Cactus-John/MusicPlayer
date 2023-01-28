
<?php
    $i = 1;
    $song_playlist = [
        "../music/Dawn FM.mp3",
        "../music/Gasoline.mp3",
        "../music/How Do I Make You Love Me.mp3",
        "../music/Take My Breath.mp3",
        "../music/Sacrifice.mp3",
        "../music/A Tale By Quincy.mp3",
        "../music/Out Of Time.mp3",
        "../music/Here We Go...Again (feat.Tyler, the Creator).mp3",
        "../music/Best Friends.mp3",
        "../music/Is There Someone Else.mp3",
        "../music/Starry Eyes.mp3",
        "../music/Every Angel is Terrifying.mp3",
        "../music/Don't Break My Heart.mp3",
        "../music/I Heard You're Married (feat. Lil Wayne).mp3",
        "../music/Less Than Zero.mp3",
        "../music/Phantom Regret By Jim.mp3"
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
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAWN FM</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animation.css">

</head>

<body>
    <div class="topnav">
        <a href="index.php">HOME</a>
    </div>

    <img class ="img_dawn">

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
