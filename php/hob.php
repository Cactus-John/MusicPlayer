
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOUSE OF BALLOONS</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/animation.css">
</head>

<body class = "bgcolor">
    <div class = "img-animation-hob">
        <div class="topnav">
            <a href="index.php">HOME</a>
        </div>

        <img style="vertical-align:middle;margin:50px" width = "400" height = "400"
        src = "https://images.squarespace-cdn.com/content/558b1305e4b0fa1db7e46ace/1449186262223-3VHPIHZRJC6QZVTNVJAA/image-asset.jpeg?content-type=image%2Fjpeg"
        border = "3" alt = "hob">
    </div>

    <ul>

            foreach ($song_playlist as $song) {
                echo '<li>'.$song.'</li>';
            }
        ?>
    </ul>
    <ol>
        <?php $song_playlist = [
            "../music/High For This.mp3",
            "../music/What You Need.mp3",
            "../music/HouseOfBalloons_GlassTableGirls.mp3",
            "../music/The Morning.mp3",
            "../music/Wicked Games.mp3",
            "../music/The Party & The After Party.mp3",
            "../music/Coming Down.mp3",
            "../music/Loft Music.mp3",
            "../music/The Knowing.mp3",
            "../music/Twenty Eight.mp3"
        ];
        $i = 0;
        foreach ($song_playlist as $song) {
            echo '<li><audio controls><source src="'.$song.'" type="audio/mpeg"></audio>'.$i.'- '.$song.'</li>';
            $i++;
        }
        ?>
    </ol>
</body>
