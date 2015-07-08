<?php

use yii\data\ArrayDataProvider;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $categories app\models\Categories */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        foreach ($categories as $category) {
    ?>
        <h2 class="text-center"> <?= $category->name ?> </h2>
        <?php if ($category->photo_name): ?>
            <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/store/' . $category->getImage()->filePath, ['class' => 'img img-responsive']), ['/apis/indexbycategory', 'categoryId' => $category->id]); ?>
        <?php endif; ?>

        <?php
            $provider = new ArrayDataProvider([
                'allModels' => $category->apis,
                'sort' => false,
                'pagination' => false,
            ]);
        ?>
    <?php
        }
    ?>

</div>
