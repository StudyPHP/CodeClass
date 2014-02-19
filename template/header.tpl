<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>
           <?php if (!empty($this->array['title'])) 
                    $this->array['title'];
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <header>
           <?php include 'menu/menu.php'; ?>
        </header>

