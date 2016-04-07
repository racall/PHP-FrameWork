<?php

class start
{
	public static $controller;
	public static $method;
	private static $config;
	private static function init_db(){
		DBpkg::Connect();
	}
	private static function init_view(){
		View::init('Smarty',self::$config['viewconfig']);
	}
	private static function init_controllor(){
		self::$controller=isset($_GET['c'])?CheckStr($_GET['c']):'index';
	}
	private static function init_method(){
		self::$method=isset($_GET['m'])?CheckStr($_GET['m']):'index';
	}
	public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			C(self::$controller, self::$method);
	}
}