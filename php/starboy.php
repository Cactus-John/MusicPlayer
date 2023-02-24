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
    <title>STARBOY</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
    <link rel="stylesheet" type="text/css" href="../css/style-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/style-animation.css">
</head>

<body>
    <div class="topnav">
        <a href="index.php">HOME</a>
        <h1>STARBOY</h1>
    </div>

    <img class = "img_starboy">
    <?php $i = 0;
    foreach ($song_files as $song) {
        $song_title = $song_titles[array_search($song, $song_files)];
        echo '<li class = "song-text-hob"><audio controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
        $i++;
    }
    ?>
</body>
</html>