<?php
namespace app\forms;

use php\lib\str;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class replace extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $event = null)
    {    
        $one = $this->edit->text;
        $two = $this->editAlt->text;
        $replace = str::replace($this->form("NotePad")->textArea->text,$one, $two);
        $this->form('NotePad')->textArea->text = $replace;
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        
    }

}
