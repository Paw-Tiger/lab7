<?php
namespace KDAWebLab;

use \KDAWebLab\KDACore as KDACore;
class Controller {
    /**
     * Core instance
     * @var Core 
     */
    protected $app;
    
    /**
     * Init $app property
     * @param Core $core
     */
    public function init(KDACore $KDAcore ){
         $this->app = $KDAcore;
    }
    
}

