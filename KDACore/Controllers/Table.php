<?php
namespace KDAWebLab\Controllers;

class Table extends \KDAWebLab\Controller {
	
	 public function doIndex(){
		 echo "<i>Наша таблица</i><br/>";
        echo "<br/><b>".$this->app->getTable()."</b><br/>";
        echo "Автор ".$this->app->getSiteAuthor()."<br/>";
      
    } 
	
}