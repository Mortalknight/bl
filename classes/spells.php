<?php
/*

        Functions in this class should have a corresponding name to the spell that they are for 
        spells with the name of exampleSpell will trigger the same function
        
*/
class spells {
    
    //this represent a spell with the name of exampleSpell
    // spells accept 2 parameters 
    // $me the caster
    // $enemy the enemy
    function exampleSpell($me, $enemy)
    {
        //this spell for example just deals damage to the enemy
        $dT = new damageTabel;
        //the multiplier for this spell is 1.2
        $dT->SCALING = 1.2;
        //Set the type of damage the spell does, in this case its attack damage
        $dT->DAMAGE_TYPE = 'ATTACK_DAMAGE';
        //We let the champion calculate and critchance or other damage multipliers before we continue
        $dT = $me->dealDamage($dT);
        //now we deal the damage to the enemy
        $enemy->takeDamage($me,$dT);
    }
}
?>