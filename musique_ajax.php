<?php
$request = $_GET['request'];
function search ($request, $file) {
    return strstr(mb_strtolower($file), trim(mb_strtolower($request)));
}
?>
<div class="content">
<?php if($request !== ''): ?>
    <div class="list">
        <?php
            $files = scandir('/var/www/html/myphp/Musique');
            array_splice($files, 0, 2);
            natcasesort($files);
            $id = 0;
            foreach ($files as $file) :
                try {
                    if (search($request, $file) === false) {
                        continue;
                    } else {
                        new \Exception('Test');
                    }
                } catch (Exception $e) {
                    echo '<div class="aucun"><h2>Aucun Resultat</h2></div>';
                }
                $id++;
                $parts = explode(' - ', $file);
        ?>
        <div class="song-item" data-id="<?= $id ?>" data-chanteur="<?= $parts[0] ?>" data-name="<?= pathinfo($parts[1])['filename'] ?>">
            <label onclick='lyrics(this)'><?= basename($parts[1], '.mp3') ?></label>
            </br>
            <div class="actions">
                <div class="button play" onclick='play("<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' ?>Musique/<?= htmlentities($file, ENT_QUOTES) ?>", this)'><img src="play.png"></img></div>
                <div class="button pause" onclick='pause("<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' ?>Musique/<?= htmlentities($file, ENT_QUOTES) ?>", this)'><img src="pause-play.png"></img></div>
            </div>
        </div>
        </br>
        <?php endforeach; ?>
    </div>
<?php
else :
?>
<div class="content">
    <div class="list">
        <?php
            $files = scandir('/var/www/html/myphp/Musique');
            array_splice($files, 0, 2);
            natcasesort($files);
            $id = 0;
            foreach ($files as $file) :
                $id++;
                $parts = explode(' - ', $file);
        ?>
        <label onclick='lyrics(this)'><?= basename($parts[1], '.mp3') ?></label>
        </br>
        <div class="song-item" data-id="<?= $id ?>" data-chanteur="<?= $parts[0] ?>" data-name="<?= basename($parts[1], '.mp3') ?>">
            <div class="actions">
                <div class="button play" onclick='play("<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' ?>Musique/<?= htmlentities($file, ENT_QUOTES) ?>", this)'><img src="play.png"></img></div>
                <div class="button pause" onclick='pause("<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' ?>Musique/<?= htmlentities($file, ENT_QUOTES) ?>", this)'><img src="pause-play.png"></img></div>
            </div>
        </div>
        </br>
        <?php endforeach; ?>
    </div>
</div>
<?php endif;
?>
</div>
