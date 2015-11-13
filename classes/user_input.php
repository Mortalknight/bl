<?php
/*

        Execute all the users functions during battle
        
*/
class user_input {
    
    
    
    //the id of the battle
    private $BATTLEID = 0;
    
    //the event class is stored here
    private $EVENT;
    
    function __construct()
    {
        //create
        $this->EVENT =  new event();
    }
    
    //set the current active champion
    function setPlayersActiveChampions($p)
    {
        $this->EVENT->PLAYER1_ACTIVE_CHAMPION = new champion();
        $this->EVENT->PLAYER1_ACTIVE_CHAMPION->createChampion($p);
        
        $this->EVENT->PLAYER2_ACTIVE_CHAMPION = new champion();
        $this->EVENT->PLAYER2_ACTIVE_CHAMPION->createChampion($p);
    }
    
}
?>