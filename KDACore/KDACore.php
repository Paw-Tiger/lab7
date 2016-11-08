<?php

namespace KDAWebLab;

/**
 * Core - test core app class
 * @author Andrey Lisnyak <munspel@ukr.net>
 */
class KDACore {
	
	protected $BASE_DIR = "";
    protected $BASE_URL = "";
    protected $config = array();

	protected static $_instance;

    public function __construct() {
        
    }
	
	 private function __clone() {
        
    }
	
	/**
     * Статическая функция, которая возвращает
     * экземпляр класса или создает новый при
     * необходимости
     *
     * @return SingletonTest
     */
	
	 public static function getInstance() {
        // проверяем актуальность экземпляра
        if (null === self::$_instance) {
            // создаем новый экземпляр
            self::$_instance = new self();
        }
        // возвращаем созданный или существующий экземпляр
        return self::$_instance;
		
    }
	
	/**
     * 
     * @param type $config
     */
	
	public function run($config) {
		//echo $config;
        if (is_file($config)) {
            $this->config = include $config;
			
        } else {
             echo "tra-la-la";
        }
        $route = !empty($_REQUEST['q']) ? trim($_REQUEST['q']) : '';
		
        $this->handleRequest($route);
    }
	
	 /**
     * 
     * @param type $uri
     */
    protected function handleRequest($uri) {
        if (empty($uri)) {
            $uri = $this->config["DefaultRoute"];
        }
		
        $request = explode('/', $uri);
        $className = '\\KDAWebLab\\Controllers\\' . ucfirst(array_shift($request));
		if(class_exists($className)){
			$actionName = "do" . ucfirst(array_shift($request));		
			$actionName2 = "doAdmin"; 
			$controller = new $className();
			$controller->init($this);
			if (method_exists($controller, $actionName)) {
				$controller->{$actionName }();
			}else{
				echo "<b>Eror Method!</b>";
			}
			if (method_exists($controller, $actionName2)) {
				$controller->{$actionName2 }();
			}else{
				echo "<b>Eror Method! </b>".$actionName2;
			}
		}else{
			echo "<b>Eror Class!</b>";
		}
        
		
    }

    /**
     * Return site name from config
     */
    public function getSiteName() {
        return $this->config["SiteName"];
    }
	
	public function getSiteAuthor() {
		return $this->config["Author"];
	}
	
	public function getTable()
	{
		$n = 1;
		echo "<h1  >Таблица Умножения</h1>";
		echo "<div class='box _min'>";
		for($i = 0; $i<=9; $i++){
			if($i%2!=0)
				echo "<span class='minp'>".$i."</span>";
			else
				echo "<span class='minp _bgbl'>".$i."</span>";
		}
		echo "</div>";
			for($i = 1; $i<=9; $i++)
			{
				echo "<div class='box'>";
				
				for($j = 0; $j<=9; $j++)
				{
					if($j%2!=0)
						echo "<span class='minp'>".$i." x ".$j." = ".$i*$j."</span>";
					else
						echo "<span class='minp _bgbl'>".$i." x ".$j." = ".$i*$j."</span>";
				}
				echo "</div>";
			}
	}
}
