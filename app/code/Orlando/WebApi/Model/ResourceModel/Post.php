<?php
namespace Orlando\WebApi\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        // _init('$mainTable', '$idFieldName')
        $this->_init('orlando_webapi','entity_id');
    }
}