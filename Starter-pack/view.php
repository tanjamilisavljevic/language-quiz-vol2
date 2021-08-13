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
	<!-- TODO: add a form for the user to play the game -->
    <form>
        <p class="randomChoice"> The word to translate: </p>
        <label for="userChoice">Your guess:</label> <br>
        <input type="text" id="userChoice" name="userChoice"><br>

        <button type="submit" name="submit">Go</button>
        <p class="userChoice"></p>

    </form>
</body>
</html>