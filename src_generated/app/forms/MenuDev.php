<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class MenuDev extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('MenuDev');

        
    }

}
