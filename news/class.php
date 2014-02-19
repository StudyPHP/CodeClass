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
    public $count;
    public function __construct() 
	{
        parent::__construct();
    }

    /* Function work correct */
    function InsertData ($count)
    {
        $int = 0;
        if ($_GET['id'])
        {
           $int = $_GET['id']+$count; 
        }
        $option = parent::Limit($int,$count);
        $data = parent::Select('news','*',$option);
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
            
    function ShowNews($count = 3) // Добавить функцию выбора количества показываемых preview
    {
        $data = $this->InsertData ($count);
        
        /*
        echo "<PRE>";
        print_r($data);
        echo "</PRE>";
        */
        
        // Generate day news
        if ($data['id'] == 0)
        {
            echo $data['day'];
        }
        // Generate preview
        echo '<hr><div id="p_view">';
        for ($i=key ($data);$i<count($data);$i++)
        {
            $url = "new.php?id={$data[$i]['id']}";
            echo '<div class="p_img"> 
                    <a href="'.$url.'">
                        <img src="images/';
            if ($data[$i]['media'] != 'image')
            {
                echo '000_news_def.jpg"></a></div>';
            }
            else 
            {
                echo '00'.$data[$i]['id'].'_news.jpg"></a></div>';
            }
            $times = $this->TimeConverting($data[$i]['time'], $i);
            echo 'Time of publication: '.$times['day'].', '.$times['time'].'<br>';
            echo 'Category: '.$data[$i]['category'];            
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
                $preview .= '<a href="new.php?page='.$data[$i]['id'].'">... done.</a>';
                echo "<p>".$preview;
                break;
            }
        }
        echo '</div>';
    }
    
    function ShowNew() // In work...
    {
	$array = parent::Select('news', $_POST['id']);
    }
}