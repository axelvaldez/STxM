<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ST×M</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>ST<span class="accent">×</span>M</h1>
        <p>Start The Xerox Machine</p>
    </header>
    <main>
        <?php
        define('IMAGEPATH', 'img/');

        if (is_dir(IMAGEPATH)){
            $handle = opendir(IMAGEPATH);
        }
        else{
            echo 'No image directory';
        }

        foreach(glob(IMAGEPATH.'*') as $filename){
            echo "<img src=\"img/" . basename($filename) . "\">\n";
        }

        ?>
    </main>
    <footer>
        <p>Made and curated by <a href="https://axelvaldez.mx">Axel</a>. <a href="https://github.com/axelvaldez/stxm">Make your own</a>.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>