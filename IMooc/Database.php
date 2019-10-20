<?php

namespace IMooc;
/**
 * 
 */
class Database 
{
	
	function where($where)
	{
		var_dump('where');
		return $this;
	}

	function limit()
	{
		return $this;
	}

	function insert()
	{
		return $this;
	}

	function create()
	{
		return $this;
	}
}