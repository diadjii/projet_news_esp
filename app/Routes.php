<?php
namespace AppNews;
use AppNews\Controller\AppController;

// require "vendor/autoload.php";

class Routes {
	private $request;
	private $urls = [];

	function __construct() {
		$this->request = $_SERVER;
	}

	public function get($url, $method) {
		$new = array($url => $method);
		$this->urls = array_merge($new, $this->urls);
	}

	public function startRouter() {
		$this->currentRequest();
	}

	private function currentRequest() {
		$uri = $this->request['REQUEST_URI'];

		switch ($uri) {
		case '/accueil':
			AppController::home($_GET);
			//print_r($this->urls);
			break;
		case '/article/create':
			AppController::createArticle($_POST);
			//print_r($this->urls);
			break;
		case '/category/all':
			AppController::getAllCategory();
			// echo $uri;
			break;
		default:

			break;
		}
	}
}
