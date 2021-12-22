<?php
namespace Orlando\WebApi\Api;

interface PostInterface
{
    const PROPERTY_ID  = 'entity_id';
    const PROPERTY_POST_ID = 'entity_id';
    const PROPERTY_TITLE = 'title';

    /**
     * @api 
     * @return int|null
     */
    public function getId();

    /**
     * @api 
     *
     * @param int $postId
     * @return string
     */
    public function setDelete($postId);

    /**
     * get Post Entity 'entity_id' property value
     * @return int|null
     */
    public function getPostId();

    /**
     * set Post entity 'entity_id' property value
     * @param int $postId
     * @param string[] $data
     * @return string
     */
    public function getById($postId,$data);


    /**
     * POST for test api
     * @param string[] $data
     * @return string
     */
    public function setData($data);

}