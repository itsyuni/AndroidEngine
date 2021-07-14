<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Music extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $event = null)
    {    
        
        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
        $this->player->play();
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $event = null)
    {    
        $this->player->pause();
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $event = null)
    {    
        $this->player->stop();
    }

}
