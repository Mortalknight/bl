<?php
class damageTabel{
    
    /*
    
    This is the class that gets passed to all functions that handels damage
    
    */
    
    
    //the amount of damage the abillity does
    public var DAMAGE = 0;
    //The multiplier for the abillity
    public var SCALING = 0;
    //The type of damage the abillity does
    public var DAMAGE_TYPE = 'ATTACK_DAMAGE';
    // this is a criticalHit ?? De nada
    public var CRITICAL = false;
    //Can this abillity trigger lifesteal or onhit effects?
    public var TRIGGER_SPELLEFFECT = false;
}
?>