<?php

require_once('../src/functions.php');
require_once('../vendor/autoload.php');

if (isset($_POST['widthValue']) && isset($_POST['heightValue'])) {
    $requestedWidth =  $_POST['widthValue'];
    $requestedHeight = $_POST['heightValue'];
    $grid = new \guesserApplication\Classes\GridGenerator($requestedWidth, $requestedHeight);
    var_dump($grid);
} else {
    header('Location: index.php');
}

?>

<head>
    <meta charset="utf-8">
    <title>Grid Guesser</title>
</head>

<body>
    <h2>Select a square!</h2>
    <main id='gridContainer'></main>
</body>