<?php

require_once('../src/functions.php');

if (isset($_POST['widthValue']) && isset($_POST['heightValue'])) {
    $requestedWidth =  $_POST['widthValue'];
    $requestedHeight = $_POST['heightValue'];
    $minGridValue = 1;
    $maxGridValue = 20;
    if ($requestedWidth > $minGridValue && $requestedHeight > $maxGridValue &&
        $requestedWidth < $maxGridValue && $requestedHeight < $maxGridValue) {
        $winningSquare = generateWinningSquare($requestedWidth, $requestedHeight);

    } else {
        header('Location: index.php');
    }
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