<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Language1 extends AbstractForm
{

    /**
     * @event label3.click-Left 
     */
    function doLabel3ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Language1');

        
    }

}
