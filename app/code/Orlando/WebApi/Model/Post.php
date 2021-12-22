<?php
namespace Orlando\WebApi\Model;
use Orlando\WebApi\Api\PostInterface;

class Post implements PostInterface
{
    const CACHE_TAG = 'orlando_webapi';

    protected function _construct()
    {
        /* _init($resourceModel)  */
        $this->_init('Orlando\WebApi\Model\ResourceModel\Post');
    }


    /**
     * @api
     * @return int|null
     */
    public function getId() {
        return $this->getData(self::PROPERTY_ID);
    }

    /**
     * @api
     * @param int $id
     * @return \Orlando\WebApi\Model\Post 
     */
    public function setDelete($id) {

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('orlando_webapi');

        $sql = "DELETE FROM " . $tableName . " WHERE entity_id=$id";     
        $connection->query($sql);  

        return 'successfully deleted';

    }

    /**
     * @api
     * @return int|null
     */
    public function getPostId() {
        return $this->getData(self::PROPERTY_POST_ID);
    }

    /**
     * update function
     * 
     * {@inheritdoc}
     */
    public function getById($id,$data)
    {
    	$entityId = $id;
    	$idc =  $data['customer_id'];
        $name =$data['SKU'];
        $number =$data['discount'];

    	$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('orlando_webapi');

        $sql = "UPDATE " . $tableName . " SET customer_id=$idc, SKU='$name', discount=$number, updated_at='".date('Y-m-d H:i:s')."' WHERE entity_id=$entityId";     
        $connection->query($sql);  

        return 'successfully updated';
    }


    /**
     * insert
     * 
     * {@inheritdoc}
     */
    public function setData($data) {
        $id =  $data['customer_id'];
        $name =$data['SKU'];
        $number =$data['discount'];


        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('orlando_webapi');

        $sql = "Insert Into " . $tableName . " (customer_id, SKU, discount, created_at) Values ($id, '$name', $number, '".date('Y-m-d H:i:s')."')";     
        $connection->query($sql);  

        return 'successfully saved';
    }
}