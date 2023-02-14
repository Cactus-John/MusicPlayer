
<?php
    $albums = [
        'HOUSE OF BALLOONS', 'THURSDAY', 'ECHOES OF SILENCE', 'KISS LAND', 'BEAUTY BEHIND THE MADNESS',
        'STARBOY', 'MY DEAR MELANCHOLY', 'AFTER HOURS', 'DAWN FM'
    ];
    $title = "The Weeknd's Discography";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE WEEKND'S PLAYLIST</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/style-images.css">
</head>

<body class="bgimage">
    <h1> <?php echo $title ?> </h1>
    <div class="topnav">
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

    <section class = "section-hob">
        <h3><?= $albums[0] ?></h3>
        <p>
            House of Balloons is the debut mixtape by Canadian singer The Weeknd. It was released on March 21, 2011, by the artist's own record label XO.
            The mixtape was released for free on the Weeknd's website and was the subject of increased media discussion upon the use of its songs on television,
            as well as the relative anonymity of the singer-songwriter. House of Balloons was entirely recorded in Toronto, with production handled primarily by The Weeknd,
            Doc McKinney, Illangelo, and Cirkut. The Weeknd would later collaborate with McKinney and Illangelo on several future releases. Its title is derived from the nickname
            the singer gave to his former home in Parkdale, Toronto. The mixtape received widespread acclaim, with critics praising its dark aesthetic, production, and lyrical content.
            It is widely regarded as a major influence on both contemporary and alternative R&B.[4] House of Balloons also contains elements of soul, trip hop, indie rock, dream pop,
            and electronic music.[5] Lyrically, the mixtape explores the Weeknd's drug use and experiences with love, heartbreak, and promiscuity. House of Balloons was commercially
            released as part of the compilation album Trilogy (2012) and included the singles "Wicked Games" and "Twenty Eight", the latter of which is a bonus track. On its tenth
            anniversary, the original mixtape was released in digital formats, and included samples which failed to gain copyright clearance on Trilogy. The reissue was accompanied
            by a limited edition line of merchandise designed by architect Daniel Arsham.
        </p>
    </section>

    <section class = "section-thursday">
        <h3> <?= $albums[1] ?> </h3>
        <p>
            Thursday is the second mixtape by Canadian singer the Weeknd. It was released on August 18, 2011, by XO. Like his debut mixtape House of Balloons (2011),
            the Weeknd collaborated with producers and songwriters Doc McKinney and Illangelo; the duo produced Thursday in its entirety, and it contains fewer samples
            than its predecessor. Recorded in Toronto, the mixtape is also notable for its guest appearance from Canadian rapper Drake.
            Thursday has an unconventional and diverse musical style, drawing on downtempo, dubstep, dream pop, hip hop, rock, and reggae music.
            It contains similar themes to his previous works, exploring the Weeknd's drug use, libertinism, and experiences with love and newfound fame. He titled the mixtape
            as a reference to a contentious open relationship he had with a former lover. Thursday received critical acclaim, who drew comparisons to House of Balloons.
            It was later commercially released as part of the compilation album Trilogy (2012), and included the single "The Zone" with Drake. On its tenth anniversary,
            the original mixes were released alongside a limited edition line of merchandise designed by artist Mr. Yanen.
        </p>
    </section>
    <section> <h3> <?= $albums[2] ?> </h3> </section>
    <section> <h3> <?= $albums[3] ?> </h3> </section>
    <section> <h3> <?= $albums[4] ?> </h3> </section>
    <section> <h3> <?= $albums[5] ?> </h3> </section>
    <section> <h3> <?= $albums[6] ?> </h3> </section>
    <section> <h3> <?= $albums[7] ?> </h3> </section>
    <section> <h3> <?= $albums[8] ?> </h3> </section>
</body>
</html>
