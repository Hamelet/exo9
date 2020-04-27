<?php

class Affichage{

    private $renderer = 
    '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bataille</title>
</head>
<body>
    <h1>COMBAT DE HEROS</h1>
    <div class="container">
        <form action="">
            <label for="">combattant 1</label>
            <input type="text" name="" id="">
            <select name="fighter1" id="">
                <option value="Mage">Mage</option>
                <option value="Nain">Nain</option>
                <option value="Brut">Brut</option>
            </select>
            <h2>VS</h2>
            <label for="">combattant 2</label>
            <input type="text" name="nom" id="nom">
            <select name="fighter2" id="select">
                <option value="Mage">Mage</option>
                <option value="Nain">Nain</option>
                <option value="Brut">Brut</option>
            </select>
        </form>
        <div>
            <bouton>combattre</bouton>
        </div>
        <div>
            <p>'
                . $fight()
            '</p>
        </div>

    </div>
</body>
</html>
    ';
    
    private function __construct(){

    }


    
}

?>
