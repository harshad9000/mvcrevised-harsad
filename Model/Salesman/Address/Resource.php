<?php

class Model_Salesman_Address_Resource extends Model_Core_Table_Resource
{
	function __construct()
	{
		$this->setResourceName('salesman_address');
		$this->setPrimaryKey('address_id');
	}
}