<?php
/**
* 封装Mysql.class.php为工厂模式
*/
class DBpkg
{
	public static $db;
	//链接数据库
	public static function Connect(){
		self::$db=new Mysql();
		self::$db->Connect();
	}
	//插入记录
	public static function Insert($table, $array){
		return self::$db->insert($table,$array);
	}
	//更新记录
	public static function Update($table, $array, $where = null){
		return self::$db->update($table, $array, $where);
	}
	//删除记录
	public static function Delete($table, $where = null){
		return self::$db->delete($table,$where);
	}
	//得到指定一条记录
	public static function FetchOne($sql){
		return self::$db->fetchOne($sql);
	}
	//得到所有记录
	public static function FetchAll($sql){
		return self::$db->fetchAll($sql);
	}
	//得到结果的记录条数
	public static function GetResultNum($sql){
		return self::$db->getResultNum($sql);
	}
}
?>