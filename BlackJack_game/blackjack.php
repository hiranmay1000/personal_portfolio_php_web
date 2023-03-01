<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BlackJack Game</title>
        <link rel="stylesheet" href="../BlackJack_game/blackjack.css" />
    </head>
    <body>
        <div class="interface">
            <div class="vertical-align">
                <h2 id="new-player">Welcome: </h2>
            <h1>BLACKJACK GAME</h1>
            <h3 id="mes-el">want to play a round?</h3>
            <p id="cards-el">CARDS:</p>
            <p id="sum-el">SCORE:</p>
            <button id="startGameBtn" onclick="startGame()">
                LET'S PLAY
            </button>
            <button id="get-card-btn" onclick="newCard()">GET A CARD</button>
            <p id="game-rule"><a href="blackjack_rules.php">GAME RLUES</a></p>
            <button id="quit-btn"><a href="../index.php">QUIT</a></button>
            </div>
        </div>
        <script src="blackjack.js"></script>
    </body>
</html>
