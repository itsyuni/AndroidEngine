<?php
namespace app\forms;

use php\gui\text\UXFont;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 


class NotePad_ENG extends AbstractForm
{

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm("replace");
    }


    /**
     * @event edit.keyDown-Enter 
     */
    function doEditKeyDownEnter(UXKeyEvent $event = null)
    {    
        $font = UXFont::of('Arial', $this->edit->text);
        $this->textArea->font = $font;
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        
    }

}
