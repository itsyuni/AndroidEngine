<?php
namespace app\forms;

use action\Animation;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 


class Phone_ENG extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Phone_ENG');

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
        
    }


}
