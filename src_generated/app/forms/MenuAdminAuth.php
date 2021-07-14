<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXEvent; 
use action\Animation; 


class MenuAdminAuth extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('MenuAdminAuth');

        
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {  
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($e->sender, 1000, function () use ($e, $event) {
		});

    if($this->editAlt->text == "228") { 
    $this->loadForm("MenuDev"); 

    } else { 
    alert("Неверный пароль"); 
}
    }



}
