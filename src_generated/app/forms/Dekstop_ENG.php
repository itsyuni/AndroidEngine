<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 


class Dekstop_ENG extends AbstractForm
{

    /**
     * @event image7.click-Left 
     */
    function doImage7ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showFormAndWait('Phone_ENG');

        
    }

    /**
     * @event image8.click-Left 
     */
    function doImage8ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Sms_ENG');

        
    }

    /**
     * @event image9.click-Left 
     */
    function doImage9ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Browser2_0');

        
    }

    /**
     * @event image10.click-Left 
     */
    function doImage10ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Settings_ENG');

        
    }

    /**
     * @event image6.mouseUp-Left 
     */
    function doImage6MouseUpLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Menu_ENG');

        
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Dekstop_ENG');

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $event = null)
    {    
        
    }

    /**
     * @event image11.click-Left 
     */
    function doImage11ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showFormAndWait('MenuAdminAuth_ENG');

        
    }

}
