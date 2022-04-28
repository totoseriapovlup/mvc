<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <header>
        <h1><a href="/">Mvc site</a></h1>
    </header>
    <nav>
        <ul>
            <li><a href="<?= Route::url()?>">Home</a></li>
            <li><a href="<?= Route::url('note')?>">Notes</a></li>
        </ul>
    </nav>
    <main>
        <?php include_once 'vendor' . DIRECTORY_SEPARATOR . self::VIEWS_DIR . DIRECTORY_SEPARATOR . $pageTemplate . '.php' ?>
    </main>
    </body>
</html>