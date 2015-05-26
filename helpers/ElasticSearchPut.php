<?php
/**
 * Created by PhpStorm.
 * User: Romanos-Dimokritos
 * Date: 26/5/2015
 * Time: 4:53 μμ
 */

namespace app\helpers;

use yii\elasticsearch\Command;
use app\models\Apis;

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
     * @param mixed $api
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
        $this->query = '{
            "_id": '.$this->api->id.',
            "name": '.$this->api->name.',
            "description": '.$this->api->description.',
            "votes_up": '.$this->api->votes_up.',
            "votes_down": '.$this->api->votes_down.',
            "privacy": '.$this->api->privacy.',
            "status": '.$this->api->status;

        if ( count($this->api->objects) > 0 ) {
            $this->query = ',
                "objects": [';
            foreach ($this->api->objects as $object) {
                $this->query = ',
                {
                    "id": '.$object->id.',
                    "name": '.$object->name.',
                    "description": '.$object->description.'
                ';

                if ( count($object->properties) > 0 ) {
                    $this->query = ',
                        "properties": [';
                    foreach ($object->properties as $property) {
                        $this->query = '
                        {
                            "name": '.$property->name.',
                            "type": '.$property->type.',
                        },';
                    }
                    $this->query = rtrim($this->query, ',');
                    $this->query = '
                        ]';
                }

                $this->query = '
                    },';
            }
            $this->query = rtrim($this->query, ',');
            $this->query = '
                ]';
        }
        $this->query = '
            }';
    }

    /**
     * Insert or Update a document into the index.
     */
    public function InsertUpdate()
    {
        // Remove all new lines etc. from the json to make it valid
        $this->query = json_decode($this->query);

        $command = new Command();
        $command->insert('api-builder', 'api', $this->query, $this->api->id);
        // build and execute the query
        //$command = $query->createCommand();
        //$rows = $command->search(); // this way you get the raw output of elasticsearch.
        //return $rows;
    }
}