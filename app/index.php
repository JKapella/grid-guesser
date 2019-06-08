<?php

?>

<head>
    <meta charset="utf-8">
    <title>Grid Guesser</title>
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/styles.css'>
    <script type='text/javascript' src='js/validation.js' defer></script>
</head>

<body>
    <h1>Grid Guesser</h1>
    <section>
        <h3>Choose your Grid size and hit 'go' to play!</h3>
        <p>(Each side can be between 2 and 50!)</p>
        <form id='form' action='game.php' method='post'>
            <input id='width' type='text' name='widthValue' maxlength='2' size='2'> squares wide and
            <input id='height' type='text' name='heightValue' maxlength='2' size='2'> squares high
            <div id='errorField'></div>
            <input type='submit'>
        </form>
    </section>
</body>