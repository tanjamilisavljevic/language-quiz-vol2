<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>

    <form method="post">
        <p class="randomChoice"> The word to translate: <?php echo $game->randomWord->frenchWord ?> </p>
        <label for="userAnswer">Your guess:</label> <br>
        <input type="text" id="userAnswer" name="userAnswer"><br>

        <button type="submit" name="submit">Go</button>
        <p class="endMessage"></p>
    </form>

</body>
</html>