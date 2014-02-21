<div>
    <h4><?=$news->data[0]['title']?></h4>
    <p><?=$news->data[0]['day']?><br>
    <?=$news->data[0]['time']?></p>
    <p>category: <?=$news->data[0]['category']?></p>
    <div>
        <img src="<?=$news->data[0]['media']?>">
    </div>
    <p><?=$news->data[0]['content']?></p>
    <p><?=$news->data[0]['original_autor']?></p>
    <p>url original: 
        <a href="<?=$news->data[0]['original_url']?>">
            <img src="images/logo/<?=$news->data[0]['original_logo']?>.png" title="<?=$news->data[0]['original_resurse']?>">
        </a>
    </p>
    <a href=""><?=$news->data[0]['tags']?></a>
    <p>
        <a href="<?=$_SERVER['HTTP_REFERER']?>">Back</a>
    </p>
</div>