<?php
namespace inc\services;

class Tools
{
    public function debug($v)
    {
        echo '<pre style="height: 100px; overflow-y:scroll; font-size: .8em; padding: 10px; font-family: Consolas, Monospace;
                    background-color: #000; color: #fff;">';
        var_dump($v);
        echo '</pre>';
    }

    public function e404()
    {
        header('Location: 404.php');
    }
}
