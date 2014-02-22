<?php foreach ($news->data as $v) {
    if ($this->type == 'news') { ?>
        <div>
            <h3>
                <a href="news.php?id=<?php echo $v['id'] ?>">id</a>
                <?php echo $v['title'] ?>
            </h3>
            <p><?php echo $v['excerpt'] ?></p>
            <h6><?php echo $v['date'] ?></h6>
        </div>
    <?php } else { ?>
        <h2><?php echo $v['title'] ?></h2>
        <h6><?php echo $v['date'] ?></h6>
        <p><?php echo $v['content'] ?></p>
    <?php }
} ?>