<?php
namespace App\Patterns\Adapter\Adapter;

interface AdapterInterface
{
    public function setItem($key, $value);

    public function getItem($key);

    public function removeItem($key);

    public function clearStorage();
}
