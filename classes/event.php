<?php
class event
{
    //We hold the current active champion here
    private var PLAYER1_ACTIVE_CHAMPION;
    private var PLAYER2_ACTIVE_CHAMPION;
    
    //the action each player have choosen represented by a number
    //1-4 spells in slot 1-4
    // 5-7 switch champion to slot 1-3
    private var PLAYER1_ACTION;
    private var PLAYER2_ACTION;
    
    
    
    //this event should be fired when both players have selected a action to take
    function mainEvent()
    {
        $startingPlayer = getStartingPlayer();
        //Do actions in order determend by speed
        if($startingPlayer==1)
        {
            doPlayerAction(PLAYER1_ACTIVE_CHAMPION,PLAYER1_ACTION,PLAYER2_ACTIVE_CHAMPION,1);
        }
        else
        {
             doPlayerAction(PLAYER2_ACTIVE_CHAMPION,PLAYER2_ACTION,PLAYER1_ACTIVE_CHAMPION,2);
        }
        //Dp the second players action
        if($startingPlayer==1)
        {
            doPlayerAction(PLAYER2_ACTIVE_CHAMPION,PLAYER2_ACTION,PLAYER1_ACTIVE_CHAMPION,2);
        }
        else
        {
             doPlayerAction(PLAYER1_ACTIVE_CHAMPION,PLAYER1_ACTION,PLAYER2_ACTIVE_CHAMPION,1);
        }
                
    }
    
    function doPlayerAction($me, $action,$enemy,$playerId)
    {
        //do propper actions for the player
    }
    
    
    function getStartingPlayer()
    {
         //this variable determens which champion uses its action first
        $speedSeed = 1;
        //If both champions speed is the same
        if(PLAYER1_ACTIVE_CHAMPION->SPEED == PLAYER2_ACTIVE_CHAMPION->SPEED)
        {
            //select one at random
            $speedSeed = rand(1,2);
        }
        else{
             if(PLAYER2_ACTIVE_CHAMPION->SPEED > PLAYER2_ACTIVE_CHAMPION->SPEED)
             {
                 $speedSeed  = 2;
             }
        }
        return $speedSeed;
    }
    
}
?>