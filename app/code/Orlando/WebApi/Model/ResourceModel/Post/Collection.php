<?php
namespace Orlando\WebApi\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        /* _init($model, $resourceModel) */
        $this->_init('Orlando\WebApi\Model\Post','Orlando\WebApi\Model\ResourceModel\Post');
    }
}