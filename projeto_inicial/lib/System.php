<?php

namespace lib;

/**
* 
*/
class System extends Router
{
	
	private $url;
	private $exploder;
	private $area;
	private $controller;
	private $action;
	private $params;

	private function setUrl() {
		$this->url = isset($_GET['url']) ? $_GET['url'] : '/home/index';
	}
	
	private function setExploder(){

		$this->exploder = exploder('/', $this->url);
	}

	private function setArea() {
		foreach ($this->routers as $i => $v) {
			if ($this->onRaiz && $this->exploder[0] == $i){
				$this->area = $v;
				$this->onRaiz = false;
			}
		}

		$this->area = empty($this->area) ? $this->routerOnRaiz : $this->area;

		if (!defined('APP_AREA')){
			define('APP_AREA', $this->area);
		}
	}
}

  ?>