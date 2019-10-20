<?php

namespace IMooc;

/**
 * 
 */
class Objectc
{
	protected $array = array();
	function __set($k ,$v)
	{
		$this->array[$k] = $v;
	}


	function __get($k)
	{
		var_dump(__METHOD__);
		return $this->array[$k];
	}

	function __call($func,$param)
	{
		// 调用类中不存在的方法执行
	}

	function __toString()
	{
		// 对象以字符串形式输出时调用  echo $obj
		return __CLASS__;
	}

	function __invoke($param){
		var_dump($param);
		// 把对象当做函数执行时调用
		return "invoke";
	}
}