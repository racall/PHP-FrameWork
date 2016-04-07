<?php
class indexModel{
	public $table='admin';
	public function Get()
	{
		$sql="select * from ".$this->table.' where Id=1';
		return DBpkg::FetchOne($sql);
	}
}