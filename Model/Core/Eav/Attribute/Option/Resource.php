<?php

class Model_Core_Eav_Attribute_Option_Resource extends Model_Core_Table_Resource
{
	
	function __construct()
	{
		parent::__construct();
		$this->setResourceName('eav_attribute_option');
		$this->setPrimaryKey('option_id');
	}
}