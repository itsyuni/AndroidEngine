<?php
namespace app\forms;

use behaviour\custom\DraggingBehaviour;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\UXDialog; 


class Dekstop extends AbstractForm
{

    /**
     * @event image7.click-Left 
     */
    function doImage7ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Phone');

        
    }

    /**
     * @event image8.click-Left 
     */
    function doImage8ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Sms');

        
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

		app()->showForm('Settings');

        
    }

    /**
     * @event image6.mouseUp-Left 
     */
    function doImage6MouseUpLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Menu');

        
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Dekstop');

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Недоступно, ожидайте обновления');

        
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

		app()->showForm('MenuAdminAuth');

        
    }

    /**
     * @event image12.click-Left 
     */
    function doImage12ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('NotePad');

        
    }

    /**
     * @event image13.click-Left 
     */
    function doImage13ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		UXDialog::show('Извините, ошибка.');

        
    }

}
