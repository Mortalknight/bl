<?php
class damageTabel{
    
    /*
    
            This is the class that gets passed to all functions that handels damage
    
    */
    
    
    //the amount of damage the abillity does
    public  $DAMAGE = 0;
    //The multiplier for the abillity
    public  $SCALING = 0;
    //The type of damage the abillity does
    public  $DAMAGE_TYPE = 'ATTACK_DAMAGE';
    // this is a criticalHit ?? De nada
    public  $CRITICAL = false;
    //Can this abillity trigger lifesteal or onhit effects?
    public  $TRIGGER_SPELLEFFECT = false;
}
?>