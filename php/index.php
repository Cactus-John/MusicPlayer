<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE WEEKND'S PLAYLIST</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="bgimage">
<h1>
    <font color="red">THE WEEKND'S DISCOGRAPHY</font>
</h1>
<div class="topnav">
    <a href="index.php">HOME</a>
    <a href="hob.php">HOUSE OF BALLOONS</a>
    <a href="thursday.php">THURSDAY</a>
    <a href="eos.php">ECHOES OF SILENCE</a>
    <a href="kissland.php">KISS LAND</a>
    <a href="bbtm.php">BEAUTY BEHIND THE MADNESS</a>
    <a href="starboy.php">STARBOY</a>
    <a href="mdm.php">MY DEAR MELANCHOLY</a>
    <a href="after_hours.php">AFTER HOURS</a>
    <a href="dawnFM.php">DAWN FM</a>
</div>
    <?php $albums = array (
        "House Of Balloons",
        "Thursday",
        "Echoes Of Silence",
        "Kiss Land",
        "Beauty Behind The Madness",
        "Starboy",
        "My Dear Melancholy,",
        "After Hours",
        "Dawn FM"
        ); ?>
    <?php foreach($albums as $album) { ?>
    <li> <?php echo $album ?> </li>
    <?php } ?>
</body>
</html>