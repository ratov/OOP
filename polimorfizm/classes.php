<?php

class Publication
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    function __construct($row)
    {
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content = $row['content'];
        $this->preview = $row['preview'];
        $this->author_name = $row['author_name'];
        $this->type = $row['type'];
    }
}

class NewsPublication extends Publication
{
    public function printItem()
    {
        echo '<br>Новость: ' . $this->title;
        echo '<br>Датф: ' . $this->date;
        echo '<hr>';
    }
}
class ArticlePublication extends Publication
{
    public function printItem()
    {
        echo '<br>Это статья: ' . $this->title;
        echo '<br>Автр: ' . $this->author_name;
        echo '<hr>';
    }
}
class PhotoReportPublication extends Publication
{
    public function printItem()
    {
        echo '<br>Это фотоотчет: ' . $this->title;
        echo '<br><img src="http://oop.loc/polimorfizm/' . $this->preview . '">';
        echo '<hr>';
    }
}