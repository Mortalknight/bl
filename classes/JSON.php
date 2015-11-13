<?php
/*

        This handles the data that should be sent between server and client
        the data is sent in JSON-arrays
        
*/
class JSON {
    //Store all events in an array
    private $EVENTS;

    //adds a event
    // eventType is the decleration of what type of event accured eg "TAKE_DAMAGE"
    // parameters is of an arraytype that contains all parameters for this event
    // EXAMPLES
    // $eventType = 'SPELL_FIRED'
    // $parameters = ('CASTER'=>1,'SPELL_TYPE'=>'LIGHTSLINGER','DAMAGE_DELT'=>200)
    function addEvent($eventType,$parameters)
    {
        //create a new array to add to the current eventlist
        $toAdd = Array();
        //the key to the new item is the eventtype
        $toAdd[$eventType] = $parameters;
        //Add as a new item to the eventlist
        $this->EVENTS[] = $toAdd;
    }
    
    function getEvents()
    {
        //encode to json format and return
        return json_encode($this->EVENTS);
    }
    
}
?>