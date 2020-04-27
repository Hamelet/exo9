<?php

require_once "../Model/Character.php";
require_once "../controler/Brut.php";
require_once "../controler/Dwarf.php";
require_once "../controler/Mage.php";
require_once "../Model/Guild.php";

$Proud_axe = new Guild("Proud_axe");
$steel_Gauntlet = new Guild("steel_gauntlet");

// chaques guild est un tableau
$Proud_axe->content=array_push(
                                $Bolg = new Brut("Bolg"),
                                $Kili = new Dwarf("Kili"),
                                $Ragadast = new Mage("Ragadast"),
                                $Azog = new Brut("Azog")
);

$steel_Gauntlet->content=array_push(
                                    $Fili = new Dwarf("Fili"),
                                    $Gandalf = new Mage("Gandalf"),
                                    $Aragorn = new Brut("Aragorn"),
                                    $Balin = new Dwarf("Balin")
); 
var_dump($Proud_axe->content);


function fight($pCharac1, $pCharac2)
{    
    while ($pCharac2->getLife() > 0 && $pCharac1->getLife() > 0) {
        $pCharac2->hit($pCharac1);
        $pCharac1->hit($pCharac2);
        if($pCharac2->getLife() <= 0)
            {
                 echo $pCharac1->name . " a gagné <br>";      
            } else if($pCharac1->getLife() <= 0)
            {
                echo $pCharac2->name . " a gagné <br>";
            }else{echo "round suivant <br>";}
                            
    } return;
        
}

function pick($pGuild1, $pGuild2)
{
    for ($i=0; $i < sizeof($pGuild1->content) ; $i++) { 
        for ($j=0; $j < sizeof($pGuild2->content) ; $j++) { 
            return fight($pGuild1->content[rand($i)], $pGuild2->content[rand($j)]);
        }
    }
}




pick($Proud_axe->content, $Steel_gauntlet->content);







