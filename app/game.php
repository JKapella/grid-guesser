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
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Oswald&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/styles.css'>
    <script type='text/javascript' src='js/game.js' defer></script>
</head>

<body>
    <header>
        <h2 id='game-page-header'>Select a square!</h2>
        <h2 id='guess-counter' class='counter' data-guess='0'>Guesses so far: 0</h2>
        <p>The number in a clicked square indicates how far from the winner you are - diagonals are included</p>
    </header>
    <main>
        <?php
            if (isset($grid)) {
                echo \guesserApplication\Classes\GridHtmlCreator::createHTML($grid);
            } else {
                echo 'Error: Unable to generate grid!';
            }
        ?>
    </main>
    <nav id='win-banner'>
        <h3 id='win-text'>You found it in X attempts!</h3>
        <form action='index.php'>
            <input type='submit' value='Try Again?'>
        </form>
    </nav>
</body>