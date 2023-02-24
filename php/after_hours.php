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
    "../music/Alone Again.mp3",
    "../music/Too Late.mp3",
    "../music/Hardest To Love.mp3",
    "../music/Scared To Live.mp3",
    "../music/Snowchild.mp3",
    "../music/Escape From La.mp3",
    "../music/Heartless.mp3",
    "../music/Faith.mp3",
    "../music/Blinding Lights.mp3",
    "../music/In Your Eyes.mp3",
    "../music/Save Your Tears.mp3",
    "../music/Repeat After Me.mp3",
    "../music/After Hours.mp3",
    "../music/Until I Bleed Out.mp3"
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
    <title>AFTER HOURS</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body class = "bgcolor">
        <div class="topnav">
            <a href="index.php">HOME</a>
            <h1>AFTER HOURS</h1>
        </div>
        <img class = "img_afterhours">
        <?php $i = 1;
        foreach ($song_files as $song) {
            $song_title = $song_titles[array_search($song, $song_files)];
            echo '<li class = "song-text-hob"><audio controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'. - '.$song_title.'</li>';
            $i++;
        }
        ?>
</body>
</html>
