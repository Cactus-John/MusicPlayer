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
    "../music/D.D.mp3",
    "../music/Montreal.mp3",
    "../music/Outside.mp3",
    "../music/XO / The Host.mp3",
    "../music/Initiation.mp3",
    "../music/Same Old Song.mp3",
    "../music/The Fall.mp3",
    "../music/Next.mp3",
    "../music/Echoes Of Silence.mp3",
    "../music/Till Dawn (Here Comes The Sun).mp3",
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
    <title>ECHOES OF SILENCE</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
    <link rel="stylesheet" type="text/css" href="../css/style-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body class = "bgcolor-eos">
    <div class="topnav">
        <a href="index.php">HOME</a>
        <h1>ECHOES OF SILENCE</h1>
    </div>

    <img class = "img_eos">
    <?php $i = 1;
    foreach ($song_files as $song) {
        $song_title = $song_titles[array_search($song, $song_files)];
        echo '<li class = "song-text-hob"><audio controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
        $i++;
    }
    ?>
</body>
</html>