<nav>
    <div>
        <?php foreach ($menu->data as $v) { ?>
        <li>
            <a href="<?php echo $v['link'] ?>"><?php echo $v['name'] ?></a>
        </li>
        <?php } ?>
    </div> 
</nav>
