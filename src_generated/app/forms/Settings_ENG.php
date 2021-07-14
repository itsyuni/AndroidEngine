<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Settings_ENG extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Settings_ENG');

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
        
    }


    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Wifi_ENG');

        
    }

    /**
     * @event label5.click-Left 
     */
    function doLabel5ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Bluetooth_ENG');

        
    }

    /**
     * @event label13.click-Left 
     */
    function doLabel13ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Info_ENG');

        
    }

    /**
     * @event label6.click-Left 
     */
    function doLabel6ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('SIM_ENG');

        
    }

    /**
     * @event label7.click-Left 
     */
    function doLabel7ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('PO_ENG');

        
    }

    /**
     * @event label9.mouseDown-Left 
     */
    function doLabel9MouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Language');

        
    }

    /**
     * @event label11.click-Left 
     */
    function doLabel11ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('MenuAdminAuth_ENG');

        
    }


}
