<?php
namespace app\modules;

use php\io\Stream;
use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 


class modulesNotepad extends AbstractModule
{

    /**
     * @event openFile.action 
     */
    function doOpenFileAction(ScriptEvent $event = null)
    {    
        $text = $this->openFile->file;
        $text = Stream::getContents($text);
        $this->textArea->text = $text;
    }

    /**
     * @event action 
     */
    function doAction(ScriptEvent $event = null)
    {    
        $file = $this->saveFile->file;
      $text = $this->textArea->text;
      Stream::putContents($file, $text);
    }

    /**
     * @event saveFile.action 
     */
    function doSaveFileAction(ScriptEvent $event = null)
    {    
        $file = $this->saveFile->file;
      $text = $this->textArea->text;
      Stream::putContents($file, $text);
    }

}
