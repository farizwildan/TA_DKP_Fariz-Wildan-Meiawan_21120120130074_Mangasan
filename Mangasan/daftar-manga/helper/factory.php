<?php

class Factory
{
    public static function getMangas()
    {
        return json_decode(file_get_contents(__DIR__ . '/../data/mangas.json'));
    }
}

