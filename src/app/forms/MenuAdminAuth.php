<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXEvent; 


class MenuAdminAuth extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {  
    if($this->editAlt->text == "228") { 
    $this->loadForm("MenuDev"); 

    } else { 
    alert("Неверный пароль"); 
}
    }



}
