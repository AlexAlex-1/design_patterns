<html lang="fr">
    <head>
        <title>Ma musique</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="jquery.double-keypress.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="player.css">
        <script type="text/javascript" src="http://tracking.musixmatch.com/t1.0/AMa6hJCIEzn1v8RuOP"></script>
    </head>
    <body>
        <div style="width: 100%;justify-content: center;display: flex;">
            <input type="text" class="search" name="search" value="" placeholder="Recherche de vos audios!" title="Bienvenu!"/>
        </div>
        </br>
        <div class="content">
            <div class="list">
                <?php
                    $files = scandir('/var/www/html/myphp/Musique');
                    array_splice($files, 0, 2);
                    natcasesort($files);
                    $id = 0;
                    foreach ($files as $file) :
                        if (strpos($file, 'mp3') === false) {
                            continue;
                        }
                        $parts = explode(' - ', $file);
                ?>
                <?php $id++ ?>
                <div class="song-item" data-id="<?= $id ?>" data-chanteur="<?= $parts[0] ?>" data-name="<?= pathinfo($parts[1])['filename'] ?>">
                    <label onclick='lyrics(this)'><?= basename($parts[1], '.mp3') ?></label>
                    <br>
                    <div class="actions">
                        <div class="button play" title="Juer" onclick='play("<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' ?>Musique/<?= htmlentities($file, ENT_QUOTES) ?>", this)'><img src="play.png"></img></div>
                        <div class="button pause" onclick='pause("<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' ?>Musique/<?= htmlentities($file, ENT_QUOTES) ?>", this)'><img src="pause-play.png"></img></div>
                    </div>
                </div>
                </br>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="current">
            <div class="actions">
                <div class="button play"><img src="play.png"></img></div>
                <div class="button pause"><img src="pause-play.png"></img></div>
                <div class="button repeat" title="Répéter" onclick='repeat()'><img src="process.png"></div>
                <div class="button random" title="Random" onclick='random()'><img src="random.png"></div>
            </div>
            <div class="media-info">
                <span class="artist"></span>
                <span class="name"></span>
            </div>
            <div class="vol"><div class="percent"></div></div>
        </div>
        <script src="musique_ajax.js"></script>
        <script src="musique_player.js"></script>
    </body>
</html>
