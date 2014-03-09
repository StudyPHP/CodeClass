<?php

/*
Need to create a table "news" in MySQL for the generate of the news page
Field:
    id
    title
    time
    media
    category
    content
    tags
    original_resurse
    original_logo
    original_url
    original_author
*/

class News extends DB 
{
    public $array;
    protected $count = 3;
    protected $i = 0;
    public function __construct() 
	{
        parent::__construct();
    }

    /* Function work correct */
    function InsertDB ($count, $row, $value, $action)
    {
        if ($count)
        {
            $int = 0;
            if ($_GET['id'])
            {
               $int = $_GET['id']+$count; 
            }
            $option = parent::Limit($int,$count);
        }
        if ($row && $value && $action)
        {
            $option = parent::Where($row, $value, $action);
        }
        $data = parent::Select('news', '*', $option);
        return $data;
    }
    
    /* Function work correct */
    function TimeConverting($data, $i) // конвертация MySQ time format в "человеческий" (19 January 2014 09:23:35)
    {
        $data = explode(' ', $data);
        $day = $data[0];
        $day = date('j F Y', strtotime($day));
        switch ($day)
        {
            case date('j F Y'): $day = 'Today';
            break;
            case date('j F Y')-1: $day = 'Yesterday';
            break;
        }
        $time = $data[1];
        $times = array (
                'day' => $day,
                'time' => $time
                );
        return $times;
    }
    
    function NewsGenerated ($i, $data, $times) //генерация блока preview
    {
        $i = $i-1;
        echo '<hr><div id="p_view">';
        echo $times['time'].'<br> Category: '.$data[$i]['category'];      
        $url = "index.php?page=news&module={$data[$i]['id']}";
        echo '<div class="p_img"> 
                <a href="'.$url.'">';
        switch ($data[$i]['media'])
        {
            case 'image': echo '<img src="images/00'.$data[$i]['id'].'_news.jpg">';
                break;
            case 'video': echo '<img src="video/">';
                break;
            case 'flash': echo '<img src="flash/">';
                break;
            default : echo '<img src="images/000_news_def.jpg">';
        }
        echo '</a></div>';
        echo '<h4>
                <a href="'.$url.'">'.$data[$i]['title'].'</a>
              </h4>';
        // Generated text preview
        $preview = 'Sorry, no preview available...';
        if ($data[$i]['content'])
        {
            $preview = $data[$i]['content'];
            $preview = wordwrap($preview, 200, '|'); //делим строку символом "|" в позиции 200± по концу слова
            $position = strpos($preview, '|'); //возвращаем длину строки до "|"
            $preview = substr($preview, 0, $position); //обрезаем строку до "|"
            $preview .= '<a href="index.php?page=news&module='.$data[$i]['id'].'">... done.</a>';
            echo "<p>".$preview;
        }
        echo '</div>';
        return $data;
    }
    
    function ShowNews() //генерация $count блоков preview 
    {
        // выбор количества выводов preview 
        $count = $this->count;
        if ($_POST['enter'])
            $count = $_POST['count'];
        // добавить счетчик страниц, где-то так...
        $tmp = substr($_SERVER['REQUEST_URI'], 20);
        if ($tmp > 0)
            $count += $tmp;
        // запрос из БД
        $data = $this->InsertDB ($count, $row, $value, $action);
        // генерация preview
        $i = $this->i+1;
        while ($i <= $count)
        {
            $day = $times['day'];
            $times = $this->TimeConverting($data[$i-1]['time'], $i-1);
            if ($times['day'] != $day)
                echo $times['day'];
            $data = $this->NewsGenerated($i, $data, $times);
            $i++;
        }
    }
    
    function ShowNew() // блок новости
    {
        $this->data = $this->InsertDB ($count, 'id', $_GET['module'], '=');
        switch ($this->data[0]['media'])
        {
            case 'image' : $this->data[0]['media'] = 'images/00'.$this->data[0]['id'].'_news.jpg';
                break;
            case 'video' : $this->data[0]['media'] = 'video/';
                break;
            case 'flash' : $this->data[0]['media'] = 'flash/';
                break;
           default : $this->data[0]['media'] = 'images/000_news_def.jpg';
        }
        $times = $this->TimeConverting($this->data[0]['time'], 0);
        $this->data[0]['day'] = $times['day'];
        $this->data[0]['time'] = $times['time'];
        if ($this->data[0]['original_autor'] == TRUE)
            $this->data[0]['original_autor'] = 'autor: '.$this->data[0]['original_autor'];
    }
}