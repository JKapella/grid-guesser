<?php

?>

<head>
    <meta charset="utf-8">
    <title>Grid Guesser</title>
</head>

<body>
    <h1>Grid Guesser</h1>
    <section>
        <h3>Choose your Grid size and hit 'go' to play!</h3>
        <p>(Each side can be between 2 and 100!)</p>
        <form action='game.php' method='post'>
            <input type='text' name='widthValue'> squares wide and
            <input type='text' name='heightValue'> squares high
            <div id='errorField'></div>
            <input type='submit'>
        </form>
    </section>
</body>