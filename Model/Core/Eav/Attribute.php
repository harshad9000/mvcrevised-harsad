<?php

class Model_Core_Eav_Attribute extends Model_Core_Table
{            
	function __construct()
	{
      parent::__construct();
		$this->setResourceClass('Model_Core_Eav_Attribute_Resource');
		$this->setCollectionClass('Model_Core_Eav_Attribute_Collection');
	}

	public function getStatus()
   {
      if ($this->status) {
         return $this->status;
      }
      return Model_Core_Eav_Attribute_Resource::STATUS_DEFAULT;
   }

   public function getStatusText($status)
   {
      $statuses = $this->getResource()->getStatusOptions();
      if (array_key_exists($this->status,$statuses)) {
         return $statuses[$this->status];
      }
      return $statuses[Model_Core_Eav_Attribute_Resource::STATUS_DEFAULT];
   }


   public function getEntityType()
   {
      $sql = "SELECT `entity_type_id`,`type_name` FROM `entity_type`";
      return $this->getResource()->getAdapter()->fetchPairs($sql);
   }

   public function getOption()
   {
      $sql = "SELECT * FROM `eav_attribute_option` WHERE `attribute_id` = '{$this->getId()}'";
      $options = Ccc::getModel('Core_Eav_Attribute_Option')->fetchAll($sql);
      return $options;
   }
}