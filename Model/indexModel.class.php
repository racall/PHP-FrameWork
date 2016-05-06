<?php
class indexModel{
	public $table='admin';
	public function Get()
	{
		$sql="select * from ".$this->table;
		return start::$Pdos->getAll($sql);
	}
}