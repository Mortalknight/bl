<?php
class user_input {
    
    //the id of the battle
    private $BATTLEID = 0;
    
    private $EVENT;
    
    function __construct()
    {
        $this->EVENT =  new event();
    }
    
    
    function setPlayersActiveChampions($p)
    {
        
        $this->EVENT->PLAYER1_ACTIVE_CHAMPION = new champion();
        $this->EVENT->PLAYER1_ACTIVE_CHAMPION->createChampion($p)
    }
    
}
?>