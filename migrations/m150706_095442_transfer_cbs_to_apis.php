<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_095442_transfer_cbs_to_apis extends Migration
{
    public function Up()
    {
        $cbss = new \app\models\CbsSearch();
        $cbsArray = $cbss->search(null)->getModels();

        foreach ($cbsArray as $cbs) {
            $api = new \app\models\Apis();
            $api->name = $cbs->name;
            $api->description = $cbs->description;
            $api->version = $cbs->version;
            $api->url = $cbs->url;
            if ($cbs->status === 'approved') {
                $api->status = 'Approved';
            }
            else {
                $api->status = 'Under Development';
            }
            $api->created_by = $cbs->created_by;
            $api->created_at = $cbs->created_at;
            $api->cbs = true;
            $api->privacy = 'public';
            $api->save();
        }

        $deleteAllCbs = new \app\models\Cbs();
        $deleteAllCbs->deleteAll();
    }
    
    public function Down()
    {
        $cbss = new \app\models\ApisSearch();
        $cbsArray = $cbss->search(['ApisSearch' => ['cbs' => true]])->getModels();

        foreach ($cbsArray as $apiToCbs) {
            $cbs = new \app\models\Cbs();
            $cbs->name = $apiToCbs->name;
            $cbs->description = $apiToCbs->description;
            $cbs->version = $apiToCbs->version;
            $cbs->url = $apiToCbs->url;
            if ($apiToCbs->status === 'Approved') {
                $cbs->status = 'approved';
            }
            else {
                $cbs->status = 'pending';
            }
            $cbs->created_by = $apiToCbs->created_by;
            $cbs->created_at = $apiToCbs->created_at;
            $cbs->save();
        }

        $deleteAllApiCbs = new \app\models\Apis();
        $deleteAllApiCbs->deleteAll(['cbs' => true]);
    }
}
