<?php
namespace App\Patterns\Adapter\Adapter;

class Adapter implements AdapterInterface
{
    public function setItem($key, $value)
    {
        ?>
        <script>
            setItem('<?= $key ?>', '<?= $value ?>');
        </script>
        <?php
    }

    public function getItem($key)
    {
        ?>
        <script>
            getItem('<?= $key ?>');
        </script>
        <?php
    }

    public function removeItem($key)
    {
        ?>
        <script>
            removeItem('<?= $key ?>');
        </script>
        <?php
    }

    public function clearStorage()
    {
        ?>
        <script>
            clear();
        </script>
        <?php
    }
}
