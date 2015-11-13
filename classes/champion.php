<?php
class champion {

    //CHAMPION DATA
    public $NAME = 'champion_name';
    public $LEVEL = 1;
    
    //CHAMPION STATS
    public $ATTACK_DAMAGE = 1.0;
    public $ABILITY_POWER = 1.0;
    
    public $SPEED = 1.0;
    
    public $HEALTH = 1.0;
    public $MAX_HEALTH = 1.0;
    
    public $ARMOR = 1.0;
    public $MAGIC_RESISTANCE = 1.0;
    
    public $LIFE_STEAL = 1.0;
    public $LIFE_ON_HIT = 1.0;
    
    //CHAMPIONS ABILLITYS
    public $SPELL1 = 1;
    public $SPELL2 = 1;
    public $SPELL3 = 1;
    public $SPELL4 = 1;
    
    
    function __Constrct() {        
    }
    
    //This champion takes damage
    // It takes a damageTabel as a argument where all the information on the damage is deffined
   public function takeDamage($dT)
    {
        //Reduce damage depending on MAGIC_RESISTANCE or  ARMOR
        $damageDelt = ($dT->DAMAGE_TYPE=='ATTACK_DAMAGE') ? armorMidigation($dT->DAMAGE) : magicMidigation($dT->DAMAGE);
        
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
                $this->killingBlow($dT);
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
    
    //Basic placeholder functions for things that will be triggerd in champions such as passive spells that trigger when dealing damage
    public function onTakeDamage($me, $enemy,$dT){}
    public function onDealDamage($me, $enemy,$dT){}
    public function onKillingBlow($me, $enemy,$dT){}
    public function onTakeHealing($me, $enemy,$dT){}
       

}
?>