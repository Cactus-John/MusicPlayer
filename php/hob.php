<?php
session_start();

$inactive = 500;

if (isset($_SESSION["timeout"])) {
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_destroy();
        header("Location: /index.php");
    }
}
$_SESSION["timeout"] = time();

$playlist = array (
    "../music/High For This.mp3",
    "../music/What You Need.mp3",
    "../music/House Of Balloons-Glass Table Girls.mp3",
    "../music/The Morning.mp3",
    "../music/Wicked Games.mp3",
    "../music/The Party & The After Party.mp3",
    "../music/Coming Down.mp3",
    "../music/Loft Music.mp3",
    "../music/The Knowing.mp3",
    "../music/Twenty Eight.mp3"
    );

    $song_titles = [];
    $song_files = [];

    foreach ($playlist as $song) {
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
    <title>HOUSE OF BALLOONS</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src = "../js/playlist.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
    <link rel="stylesheet" type="text/css" href="../css/style-animation.css">
    <link rel="stylesheet" type="text/css" href="../css/style-navigation.css">

</head>

<body class = "bgcolor">
    <div class = "img-animation-hob">
        <div class="topnav">
            <a href="index.php">HOME</a>
            <h1>HOUSE OF BALLOONS</h1>
        </div>
        <img class = "img_hob">
    </div>

        <?php $i = 0;
                foreach ($song_files as $song) {
                $song_title = $song_titles[array_search($song, $song_files)];
                echo '<li class = "song-text-hob"><audio controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
                $i++;
            }
        ?>
</body>
</html>
