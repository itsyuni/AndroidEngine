<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class SIM extends AbstractForm
{

    /**
     * @event image.mouseDown-Left 
     */
    function doImageMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('SIM');

        
    }


}
