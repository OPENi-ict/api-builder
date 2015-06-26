<?php
/**
 * Created by PhpStorm.
 * User: Romanos-Dimokritos
 * Date: 26/5/2015
 * Time: 4:53 μμ
 */

namespace app\helpers;

use app\models\Apis;
use yii\elasticsearch\Connection;
use yii\helpers\Html;

/**
 * Class ElasticSearchPut
 * @package app\helpers
 */
class ElasticSearchPut {

    /**
     * @var Apis
     */
    private $api;
    /**
     * @var string
     */
    private $query;

    /**
     * @param Apis $api
     */
    public function setApi($api)
    {
        $this->api = $api;
    }

    /**
     * Iterates through an API's Objects and their Properties and builds the JSON Query for Elastic Search
     */
    public function MakeJSON()
    {
        $this->query = '';
        $this->query = '{
            "_id": '.$this->api->id.',
            "name": "'.Html::encode($this->api->name).'",
            "description": "'.Html::encode($this->api->description).'",
            "votes_up": '.$this->api->votes_up.',
            "votes_down": '.$this->api->votes_down.',
            "privacy": "'.$this->api->privacy.'",
            "status": "'.$this->api->status.'"';

        if ( count($this->api->objects) > 0 ) {
            $this->query .= ',
                "objects": [';
            foreach ($this->api->objects as $object) {
                $this->query .= '
                {
                    "id": '.$object->id.',
                    "name": "'.Html::encode($object->name).'",
                    "description": "'.Html::encode($object->description).'"';

                if ( count($object->properties) > 0 ) {
                    $this->query .= ',
                        "properties": [';
                    foreach ($object->properties as $property) {
                        $this->query .= '
                        {
                            "name": "'.Html::encode($property->name).'",
                            "type": "'.$property->type.'"
                        },';
                    }
                    $this->query = rtrim($this->query, ',');
                    $this->query .= '
                        ]';
                }

                $this->query .= '
                    },';
            }
            $this->query = rtrim($this->query, ',');
            $this->query .= '
                ]';
        }
        $this->query .= '
            }';
    }

    /**
     * Insert or Update a document into the index.
     */
    public function InsertUpdate()
    {
        // Remove all new lines etc. from the json to make it valid
        $this->query = str_replace(array('\n','\r'), '', $this->query);

        $connection = new Connection();
        $command = $connection->createCommand();
        $command->insert('api-builder', 'api', $this->query, $this->api->id);
    }
}