
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
        <h3> <?= $albums[0] ?> </h3>
        <p>
            House of Balloons is the debut mixtape by Canadian singer The Weeknd. It was released on March 21, 2011, by the artist's own record label XO.
            The mixtape was released for free on The Weeknd's website and was the subject of increased media discussion upon the use of its songs on television,
            as well as the relative anonymity of the singer-songwriter. House of Balloons was entirely recorded in Toronto, with production handled primarily by The Weeknd,
            Doc McKinney, Illangelo, and Cirkut. The Weeknd would later collaborate with McKinney and Illangelo on several future releases. Its title is derived from the nickname
            the singer gave to his former home in Parkdale, Toronto. The mixtape received widespread acclaim, with critics praising its dark aesthetic, production, and lyrical content.
            It is widely regarded as a major influence on both contemporary and alternative R&B. House of Balloons also contains elements of soul, trip hop, indie rock, dream pop,
            and electronic music.[5] Lyrically, the mixtape explores The Weeknd's drug use and experiences with love, heartbreak, and promiscuity. House of Balloons was commercially
            released as part of the compilation album Trilogy (2012) and included the singles "Wicked Games" and "Twenty Eight", the latter of which is a bonus track. On its tenth
            anniversary, the original mixtape was released in digital formats, and included samples which failed to gain copyright clearance on Trilogy. The reissue was accompanied
            by a limited edition line of merchandise designed by architect Daniel Arsham.
        </p>
    </section>

    <section class = "section-thursday">
        <h3> <?= $albums[1] ?> </h3>
        <p>
            Thursday is the second mixtape by Canadian singer The Weeknd. It was released on August 18, 2011, by XO. Like his debut mixtape House of Balloons (2011),
            The Weeknd collaborated with producers and songwriters Doc McKinney and Illangelo; the duo produced Thursday in its entirety, and it contains fewer samples
            than its predecessor. Recorded in Toronto, the mixtape is also notable for its guest appearance from Canadian rapper Drake.
            Thursday has an unconventional and diverse musical style, drawing on downtempo, dubstep, dream pop, hip hop, rock, and reggae music.
            It contains similar themes to his previous works, exploring The Weeknd's drug use, libertinism, and experiences with love and newfound fame. He titled the mixtape
            as a reference to a contentious open relationship he had with a former lover. Thursday received critical acclaim, who drew comparisons to House of Balloons.
            It was later commercially released as part of the compilation album Trilogy (2012), and included the single "The Zone" with Drake. On its tenth anniversary,
            the original mixes were released alongside a limited edition line of merchandise designed by artist Mr. Yanen.
        </p>
    </section>
    <section class = "section-eos">
        <h3> <?= $albums[2] ?> </h3>
        <p>
            Echoes of Silence is the third mixtape by Canadian singer The Weeknd, released on December 21, 2011, by XO. Like his debut mixtape House of Balloons and his second mixtape Thursday, The Weeknd
            collaborated with musician Illangelo; who produced the majority of the project. The project also featured first-time collaborations with producers Clams Casino and DropXLife and a spoken-word interlude from rapper
            Juicy J. Lyrically, Echoes of Silence contains similar themes to The Weeknd's previous projects, exploring his drug use and experiences with love. The project was preceded by the release of the promotional
            single "Initiation" on October 10, 2011. An alternative R&B and ambient pop project with elements of post-punk and trip hop, Echoes of Silence received widespread critical acclaim.
            It was named as a longlisted nominee for the 2012 Polaris Music Prize, marking The Weeknd's second consecutive nomination for the award. Echoes of Silence was later commercially released as part of the
            compilation album Trilogy (2012) and included the bonus track "Till Dawn (Here Comes the Sun)". On its tenth anniversary, the original mixes were released alongside a limited edition line of merchandise
            designed by illustrator Hajime Sorayama. A music video for the title track directed by the aforementioned illustrator was released on December 21, 2021.
        </p>
    </section>
    <section class = "section-kissland">
        <h3> <?= $albums[3] ?> </h3>
        <p>
            Kiss Land is the debut studio album by Canadian singer The Weeknd. It was released on September 10, 2013, through XO and Republic Records. The album was supported by six singles: "Kiss Land",
            "Belong to the World", "Love in the Sky", "Live For", "Pretty", and "Wanderlust". The album's production was primarily handled by DannyBoyStyles, The Weeknd himself and DaHeala, among others.
            Kiss Land received generally positive reviews from critics. The album debuted at number two on the US Billboard 200, selling 95,000 copies in its first week. As of August 2015, the album had sold
            273,000 copies in the United States. In July 2013, during an interview with Complex, The Weeknd described the album, saying: Kiss Land symbolizes the tour life, but it's a world that I created in my head.
            Just like House of Balloons symbolizes Toronto and my experiences there, but it's a world that I created. When I think about Kiss Land, I think about a terrifying place.
            It's a place I've never been to before that I'm very unfamiliar with. A lot of it is inspired by filmmakers like John Carpenter, David Cronenberg, and Ridley Scott, because they know how to capture fear.
            That's what Kiss Land is to me, an environment that's just honest fear. I don't know who I am right now and I'm doing all these outlandish things in these settings that I'm not familiar with.
            To me, it's the most terrifying thing ever. So when you hear the screams in the record and you hear all these horror references and you feel scared, listen to the music because I want you to feel what I'm feeling.
            Kiss Land is like a horror movie.
        </p>
    </section>
    <section class = "section-bbtm">
        <h3> <?= $albums[4] ?> </h3>
        <p>
            Beauty Behind the Madness is the second studio album by Canadian singer The Weeknd, released on August 28, 2015, through XO and Republic Records. It features guest appearances from Labrinth,
            Ed Sheeran and Lana Del Rey. The album was executive produced by The Weeknd, DaHeala and Illangelo, and includes production from Kanye West, Stephan Moccio, Ben Billions,
            DannyBoyStyles, Max Martin, and Ali Payami, among others. Five singles were released from Beauty Behind the Madness, including two US Billboard Hot 100 number-ones: "The Hills" and "Can't Feel My Face".
            The album also includes the Academy Award-nominated track "Earned It", which served as the lead single from the soundtrack to Fifty Shades of Grey.
            Beauty Behind the Madness received generally positive reviews from critics and debuted at number one in several countries. It marked The Weeknd's first number-one album in the United States,
            earning 412,000 album-equivalent units in its first week. It was the tenth best-selling album of 2015, according to the International Federation of the Phonographic Industry, with 1.5 million copies sold worldwide.
            At the 58th Annual Grammy Awards in 2016, Beauty Behind the Madness won Best Urban Contemporary Album and was nominated for Album of the Year.
        </p>
    </section>
    <section class = "section-starboy">
        <h3> <?= $albums[5] ?> </h3>
        <p>
            Starboy is the third studio album by Canadian singer The Weeknd, released on November 25, 2016, through XO and Republic Records. It features guest appearances from Daft Punk, Lana Del Rey,
            Kendrick Lamar, and Future. As the album's executive producers, The Weeknd and Doc McKinney enlisted a variety of producers such as Diplo, Cashmere Cat, Metro Boomin, Frank Dukes, and Labrinth, among others.
            Starboy was supported by seven singles, including the US Billboard Hot 100 number-one lead single of the same name and the top-ten singles "I Feel It Coming" and "Die for You". It received generally favorable
            reviews from critics and debuted at number one on the US Billboard 200 with 348,000 album-equivalent units (209,000 of which were pure sales), becoming The Weeknd's second consecutive number-one album.
            It also debuted at number one on Billboard's Canadian Albums Chart. Starboy won Best Urban Contemporary Album at the 60th Annual Grammy Awards in 2018, marking The Weeknd's second win in that category.
            As of April 2022, the album is certified four-times platinum by the Recording Industry Association of America (RIAA).
        </p>
    </section>
    <section class = "section-mdm">
        <h3> <?= $albums[6] ?> </h3>
        <p>
            My Dear Melancholy (stylized as My Dear Melancholy,) is the first extended play by Canadian singer The Weeknd. It was released on March 30, 2018, through XO and Republic Records.
            Primarily produced by Frank Dukes, who serves as an executive producer alongside The Weeknd, it features contributions from Gesaffelstein, as well as Mike Will Made It, DaHeala,
            Skrillex and Daft Punk's Guy-Manuel de Homem-Christo, among others. My Dear Melancholy has been described as a return to the darker style of The Weeknd's earlier work, such as Trilogy (2012)
            and Kiss Land (2013). The EP was supported by the lead single, "Call Out My Name". It received generally favourable reviews and debuted at number one on the US Billboard 200.
            The EP has been described as "darker" than The Weeknd's previous studio releases Beauty Behind the Madness and Starboy, and has been described as a return to his earlier work though with more electronic music
            based production with Israel Daramola from Spin describing it as him "returning to the darkened drug den sounds of his earlier work". My Dear Melancholy is characterized as an alternative R&B, R&B
            and electropop record with production credits from Skrillex and Guy-Manuel de Homem-Christo from Daft Punk. My Dear Melancholy's only feature is techno artist Gesaffelstein who produced the tracks
            "I Was Never There" and "Hurt You".
        </p>
    </section>
    <section class = "section-ah">
        <h3> <?= $albums[7] ?> </h3>
        <p>
            After Hours is the fourth studio album by Canadian singer The Weeknd, released on March 20, 2020, by XO and Republic Records. Primarily produced by The Weeknd, it features a variety of producers,
            including DaHeala, Illangelo, Max Martin, Metro Boomin, and OPN, most of whom the Weeknd had worked with previously. The standard edition of the album has no features, but the remixes edition contains
            guest appearances from Chromatics and Lil Uzi Vert. Thematically, After Hours explores loneliness, self-loathing, and escapism. Prior to the album's release, The Weeknd confirmed that After Hours would contrast
            stylistically with its predecessor, Starboy (2016). Music journalists have noted the album as an artistic reinvention for the Weeknd, with the introduction of new wave and dream pop influences.
            The artwork and aesthetic for its promotional material has been described as psychedelic and being inspired by various films, such as Casino (1995), Fear and Loathing in Las Vegas (1998), Joker (2019),
            and Uncut Gems (2019), while its title is borrowed from the 1985 film of the same name directed by Martin Scorsese. After Hours was supported by four singles: "Heartless", "Blinding Lights", "In Your Eyes",
            and "Save Your Tears", three of which reached number one on the Billboard Hot 100. The title track was released as a promotional single. In March 2020, After Hours broke the record for the most global pre-adds
            in Apple Music history, with over 1.02 million users.
        </p>
    </section>
    <section class = "dawnFM">
        <h3> <?= $albums[8] ?> </h3>
        <p>
            Dawn FM is the fifth studio album by Canadian singer-songwriter The Weeknd. It was released on January 7, 2022, through XO and Republic Records. The album features narration by Jim Carrey,
            guest vocals from Tyler, the Creator and Lil Wayne, and spoken word appearances from Quincy Jones and Josh Safdie. As the album's executive producers, The Weeknd, Max Martin and Oneohtrix Point
            Never recruited a variety of other producers such as Oscar Holter, Calvin Harris and Swedish House Mafia. The Weeknd described the album's concept as a state of purgatory—a journey towards the "light at
            the end of a tunnel", serving as a follow-up to his fourth studio album After Hours (2020). Musically, Dawn FM is an upbeat record containing dance-pop and synth-pop songs that are heavily inspired by the
            1980s new wave, funk and electronic dance music styles. The album received widespread acclaim from music critics, who complimented its production and melodies.
            Four singles—"Take My Breath", "Sacrifice", "Out of Time" and "Less than Zero"—supported the album, with "Take My Breath" peaking at number six on the US Billboard Hot 100.
            The Weeknd promoted Dawn FM with an Amazon Music event on the album release day, in which he served as a disc jockey and played the album to an audience. He also promoted the album with a television
            music special on Amazon Prime Video that featured live performances, theater and performance art for a "night out at the club". Dawn FM reached number one in over 10 countries, including Australia, Canada,
            Ireland, the Netherlands, New Zealand and the United Kingdom. It debuted at number two on the US Billboard 200 chart.
        </p>
    </section>
</body>
</html>
