<?php
class champion {

    //CHAMPION DATA
    public var NAME = 'champion_name';
    public var LEVEL = 1;
    
    //CHAMPION STATS
    public var ATTACK_DAMAGE = 1.0;
    public var ABILITY_POWER = 1.0;
    
    public var SPEED = 1.0;
    
    public var HEALTH = 1.0;
    public var MAX_HEALTH = 1.0;
    
    public var ARMOR = 1.0;
    public var MAGIC_RESISTANCE = 1.0;
    
    public var LIFE_STEAL = 1.0;
    public var LIFE_ON_HIT = 1.0;
    
    //CHAMPIONS ABILLITYS
    public var SPELL1 = 1;
    public var SPELL2 = 1;
    public var SPELL3 = 1;
    public var SPELL4 = 1;
    
    
    function __Constrct() {
        
    }
    
    //This champion takes damage
   public function takeDamage($amount,$damageType)
    {
        //Reduce damage depending on MAGIC_RESISTANCE or  ARMOR
        $damageDelt = (damageType=='ATTACK_DAMAGE') ? armorMidigation($amount) ? magicMidigation($amount);
        
        //make sure the damage isnt below 0
        if($damageDelt>0){
            //calculate the new health
            $newHealth = $health - $damageDelt;
            if(($newHealth>0)){
                //if the new health isnt a killing blow reduce
                $health = $newHealth;
            }
            else {
                //if the health is a killing blow health is 0
                $health = 0;
                killingBlow();
            }
        }
        
        //return the amount of damage delt
        return $damageDelt;
    }
    //calculate the armor midigation
   private function armorMidigation($amount)
    {
        //ARMOR value can never exceed 1.0 
        $armorValue = ARMOR / (100 + ARMOR);
        //Substract the amount midigated and return
        $damageAfterMidigation = $amount - ( $amount * $armorValue );
        
        return $damageAfterMidigation;
        
    }
    //calculate the magic midigation
    private function magicMidigation($amount)
    {
         //MAGIC_RESISTANCE value can never exceed 1.0 
        $magicResistanceValue = MAGIC_RESISTANCE / (100 + MAGIC_RESISTANCE);
        //Substract the amount midigated and return
        $damageAfterMidigation = $amount - ( $amount * $magicResistanceValue );
        
        return $damageAfterMidigation;
    }
    
    private function killingBlow()
    {
        
    }
    
    

}
?>