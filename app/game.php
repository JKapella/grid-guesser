<?php

require_once('../vendor/autoload.php');

if (isset($_POST['widthValue']) && isset($_POST['heightValue'])) {
    $requestedWidth =  $_POST['widthValue'];
    $requestedHeight = $_POST['heightValue'];
    $grid = new \guesserApplication\Classes\GridGenerator($requestedWidth, $requestedHeight);
} else {
    header('Location: index.php');
}

?>

<head>
    <meta charset="utf-8">
    <title>Grid Guesser</title>
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/styles.css'>
    <script type='text/javascript' src='js/game.js' defer></script>
</head>

<body>
    <h2>Select a square!</h2>
    <h2 id='guess-counter' data-guess='0'>Guesses so far: 0</h2>
    <main>
        <?php
            if (isset($grid)) {
                echo \guesserApplication\Classes\GridHtmlCreator::createHTML($grid);
            } else {
                echo 'Error: Unable to generate grid!';
            }
        ?>
    </main>
</body>