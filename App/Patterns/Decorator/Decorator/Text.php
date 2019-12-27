<?php
namespace App\Patterns\Decorator\Decorator;

class Text extends BaseDecorator
{
    public function method($path)
    {
        $file = file($path);
        $html = '<p>';
        foreach($file as $line_num => $line) {
            $html .= $line . '<br />';
        }
        $html .= "</p>";
        return $html;
    }
}
