<?php

class URLHelper
{
    public static function getMangasRequest()
    {
        return new MangasRequest(empty($_GET["title"]) ? '' : $_GET["title"], empty($_GET["genre"]) ? '' : $_GET["genre"]);
    }
}

class MangasRequest
{
    public $title = '';
    public $genre = '';

    public function __construct(string $title, string $genre)
    {
        if (!empty(trim($title))) $this->title = str_replace('title=', '', trim($title));
        if (!empty(trim($genre))) $this->genre = (int)str_replace('genre=', '', trim($genre));
    }
}