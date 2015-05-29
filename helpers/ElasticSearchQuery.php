<?php
/**
 * Created by PhpStorm.
 * User: Romanos-Dimokritos
 * Date: 14/5/2015
 * Time: 12:29 πμ
 */

namespace app\helpers;

use yii\elasticsearch\Query;
use app\models\Apis;

/**
 * Class ElasticSearchQuery
 * @package app\helpers
 */
class ElasticSearchQuery {

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
            "bool": {
                "must_not": [
                    {"match": {"privacy": "private" } },
                    {"match": {"_id": "'.$this->api->id.'" } }
                ],
                "should": [';

        foreach($this->api->objects as $object)
        {
            $this->query .= '
                    {
                        "nested": {
                            "path": "objects",
                            "score_mode": "sum",
                            "query": {
                                "bool": {
                                    "should": [
                                        {
                                            "match": {
                                                "objects.name": {
                                                    "query": "'.$object->name.'",
                                                    "fuzziness": "AUTO",
                                                    "prefix_length": 0,
                                                    "max_expansions": 20,
                                                    "boost": 1.5
                                                }
                                            }
                                        },
                                        {
                                            "match": {
                                                "objects.description": {
                                                    "query": "'.$object->description.'",
                                                    "boost": 1.5
                                                }
                                            }
                                        },';
            foreach($object->properties as $property)
            {
                switch ($property->type) {
                    case 'integer':
                    case 'long':
                    case 'float':
                    case 'double':
                    case 'string':
                    case 'byte':
                    case 'boolean':
                    case 'date':
                    case 'dateTime':
                        $this->query .= '
                                        {
                                            "nested": {
                                                "path": "objects.properties",
                                                "score_mode": "avg",
                                                "query": {
                                                    "filtered": {
                                                        "query": {
                                                            "fuzzy": {
                                                                "objects.properties.name": {
                                                                    "value": "'.$property->name.'",
                                                                    "fuzziness": "AUTO",
                                                                    "prefix_length": 0,
                                                                    "max_expansions": 20
                                                                }
                                                            }
                                                        },
                                                        "filter": {
                                                            "term": {
                                                                "objects.properties.type": "'.$property->type.'"
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        },';
                        break;
                    default:
                        $this->query .= '
                                        {
                                            "nested": {
                                                "path": "objects.properties",
                                                "boost": 1.2,
                                                "query": {
                                                    "filtered": {
                                                        "filter": {
                                                            "term": {
                                                                "objects.properties.type": "'.$property->type.'"
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        },';
                        break;
                }
            }

            // Remove the last comma if exists so as to have a valid json
            $this->query = rtrim($this->query, ',');

            switch (count($object->properties)) {
                case 4:
                case 5:
                    $minimum_should_match_objects = 5;
                    break;
                case 6:
                case 7:
                case 8:
                    $minimum_should_match_objects = 6;
                    break;
                case 9:
                case 10:
                    $minimum_should_match_objects = 7;
                    break;
                default:
                    $minimum_should_match_objects = 8;
            }

            $this->query .= '
                                    ],
                                    "minimum_number_should_match": '.$minimum_should_match_objects.'
                                }
                            },
                            "inner_hits": {
                                "name": "'.$object->name.'",
                                "size": 5
                            }
                        }
                    },';
        }

        switch (count($this->api->objects)) {
            case 0:
            case 1:
                $minimum_should_match_api = 1;
                break;
            case 2:
            case 3:
                $minimum_should_match_api = 2;
                break;
            case 4:
            case 5:
            case 6:
                $minimum_should_match_api = 3;
                break;
            default:
                $minimum_should_match_api = 4;
        }

        $this->query .= '
                    {
                        "match": {
                            "description": {
                                "query": "'.$this->api->description.'",
                                "boost": 4
                            }
                        }
                    },
                    {
                        "match": {
                            "name": {
                                "query": "'.$this->api->name.'",
                                "fuzziness": "AUTO",
                                "prefix_length": 0,
                                "max_expansions": 10,
                                "boost": 2
                            }
                        }
                    }
                ],
                "minimum_number_should_match": '.$minimum_should_match_api.'
            }
        }';
    }

    /**
     * @return mixed
     */
    public function Build()
    {
        // Remove all new lines etc. from the json to make it valid
        $this->query = json_decode($this->query);

        $query = new Query;
        $query->fields(['name'])
            ->from('api-builder', 'api')
            ->highlight([])
            ->limit(5)
            ->query($this->query);
        // build and execute the query
        $command = $query->createCommand();
        $rows = $command->search(); // this way you get the raw output of elasticsearch.
        return $rows;
    }
}