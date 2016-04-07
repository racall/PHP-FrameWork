<?php
header("content-type:text/html;charset=utf-8");
define("ROOT", dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/function".PATH_SEPARATOR.ROOT."/libs/".PATH_SEPARATOR.ROOT."/config".PATH_SEPARATOR.ROOT."/Controller".PATH_SEPARATOR.ROOT."/Model".PATH_SEPARATOR.ROOT."/View".PATH_SEPARATOR.get_include_path());
date_default_timezone_set("UTC");
require_once 'DB/Mysql.class.php';
require_once 'core/DBpkg.class.php';
require_once 'core/View.class.php';
require_once 'ORG/Smarty/Smarty.class.php';
require_once 'config.php';
require_once 'ORGfig.php';
require_once 'function.php';
require_once 'start.php';