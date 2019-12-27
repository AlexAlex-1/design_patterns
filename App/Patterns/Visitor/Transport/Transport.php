<?php
namespace App\Patterns\Visitor\Transport;

use App\Patterns\Visitor\Changer\Changer;

interface Transport
{
    public function change(Changer $changer);
}
