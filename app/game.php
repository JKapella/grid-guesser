<?php

require_once('../src/functions.php');

if (isset($_POST['widthValue']) && isset($_POST['heightValue'])) {
    $requestedWidth =  $_POST['widthValue'];
    $requestedHeight = $_POST['heightValue'];
    if ($requestedWidth > 1 && $requestedHeight > 1) {
        //get a grid
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