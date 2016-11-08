<?php
namespace KDAWebLab\Controllers;

class Site extends \KDAWebLab\Controller {

    public function doIndex(){
        echo "<br><b>".$this->app->getSiteName()."</b><br/>";
        echo $this->app->getSiteAuthor()."<br/>";
        echo "Hello world!";
    } 
    public function doAdmin(){
        
        echo "<br><b>Hello admin!</b><br/>";
    } 
    
}
