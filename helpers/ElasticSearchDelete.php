<?php
/**
 * Created by PhpStorm.
 * User: Romanos-Dimokritos
 * Date: 27/5/2015
 * Time: 1:12 μμ
 */

namespace app\helpers;

use yii\elasticsearch\Connection;

/**
 * Class ElasticSearchDelete
 * @package app\helpers
 */
class ElasticSearchDelete {

    /**
     * @var integer
     */
    private $id;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Delete a document from the index.
     */
    public function Delete()
    {
        $connection = new Connection();
        $command = $connection->createCommand();
        $command->delete('api-builder', 'api', $this->id);
    }
}