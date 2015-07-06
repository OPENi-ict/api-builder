<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_122143_objects_cbs_fk extends Migration
{
    public function up()
    {
        $query = \app\models\Objects::find();
        $query->where(['not', ['cbs' => null]]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        $objectsArray = $dataProvider->getModels();

        foreach ($objectsArray as $objects) {
            $cbsNames = explode(',', $objects->cbs);
            foreach($cbsNames as $cbsName) {
                // Find the CBS from APIs that matches the name that was saved as a text before
                $cbs = \app\models\Apis::findOne(['name' => $cbsName]);

                if ($cbs) {
                    $objectsCBS = new \app\models\ObjectsCBS();
                    $objectsCBS->object = $objects->id;
                    $objectsCBS->cbs = $cbs->id;
                    $objectsCBS->save();
                }
            }
        }

        // Drop column cbs from Objects Table that is not needed anymore
        $this->dropColumn('{{%objects}}', 'cbs');
    }

    public function down()
    {
        // ATTENTION
        // Not easy to structure the reverse function and won't need it most likely. If there is a need, I will come back!

        $this->addColumn('{{%objects}}', 'cbs', Schema::TYPE_TEXT);
    }
}
