<?php
namespace App\Patterns\Prototype;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $profile = new Profile;
        $clone = clone $profile;
        foreach($clone as $code => $infoBlock) {
            echo nl2br($code . " " . $infoBlock . "\n");
        }
        print <<<END
This information is provided from clone object
END;
    }
}
