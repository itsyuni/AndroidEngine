<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Settings extends AbstractForm
{




    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Wifi');

        
    }

    /**
     * @event label5.click-Left 
     */
    function doLabel5ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Bluetooth');

        
    }

    /**
     * @event label13.click-Left 
     */
    function doLabel13ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Info');

        
    }

    /**
     * @event label6.click-Left 
     */
    function doLabel6ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('SIM');

        
    }

    /**
     * @event label7.click-Left 
     */
    function doLabel7ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('PO');

        
    }

    /**
     * @event label10.click-Left 
     */
    function doLabel10ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Language1');

        
    }

    /**
     * @event label11.click-Left 
     */
    function doLabel11ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('MenuAdminAuth');

        
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Settings');

        
    }



}
