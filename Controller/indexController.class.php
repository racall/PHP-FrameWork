<?php
class indexController{
	function index(){
		$m=M('index');
		$arr=$m->Get();
		View::assign(array('table'=>$arr, 'author'=>'开心的一天'));
		View::display('index.html');
	}
}