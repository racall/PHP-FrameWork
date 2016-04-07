<?php 
function C($name,$method)
{
	require_once $name.'Controller.class.php';
	$cstr=$name."Controller";
	$obj=new $cstr;
	$obj->$method();
}
function M($name)
{
	require_once $name.'Model.class.php';
	$cstr=$name.'Model';
	$obj=new $cstr;
	return $obj;
}
function V($name){
	require_once $name.'View.class.php';
	$cstr=$name.'View';
	$obj=new $cstr;
	return $obj;
}
function ORG($path, $name, $params=array()){// path 是路径  name是第三方类名 params 是该类初始化的时候需要指定、赋值的属性，格式为 array(属性名=>属性值, 属性名2=>属性值2……)
	require_once('libs/ORG/'.$path.$name.'.class.php');
	$obj = new $name();
	if(!empty($params)){
	foreach($params as $key=>$value){
				//eval('$obj->'.$key.' = \''.$value.'\';');
			$obj->$key = $value;
		}
	}
	return $obj;
}
function CheckStr($str){
	return (!get_magic_quotes_gpc())?addslashes($str):$str;
}