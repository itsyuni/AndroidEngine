<?php
namespace app\modules;

use php\jsoup\Element;
use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 


class modulesMusic extends AbstractModule
{

    /**
     * @event fileChooser.action 
     */
    function doFileChooserAction(ScriptEvent $event = null)
    {    
         Element::appendText($this->listBox, uiText($this->fileChooser));
        Element::setText($this->edit, uiText($this->fileChooser));
    }

}
