<?php

use app\widgets\Comments;
use kartik\grid\GridView;
use kartik\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $commentsModel app\models\Comments */
/* @var $commentsProvider yii\data\ActiveDataProvider */
/* @var $repliesProvider yii\data\ActiveDataProvider */
/* @var $doIFollow boolean */
/* @var $followers integer */
/* @var $recommend string */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$columns = [
	['class' => 'kartik\grid\SerialColumn'],

	//'id',
	[
		'attribute' => 'name',
		'value'=>function ($model, $key, $index, $widget) {
			return Html::a($model->name, ['/objects/view', 'id' => $model->id]);
		},
		'format'=> 'raw',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	[
		'attribute' => 'description',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	[
		'attribute' => '',
		'label' => 'Votes',
		'value'=>function ($model, $key, $index, $widget) {
			return
				Html::a($model->votes_up, ['objects/voteup', 'id' => $model->id], ['class' => 'glyphicon glyphicon-thumbs-up nounderline'])
				.
				' / ' .
				Html::a($model->votes_down, ['objects/votedown', 'id' => $model->id], ['class' => 'glyphicon glyphicon-thumbs-down nounderline']);
		},
		'format'=>'raw',
		'width' => '80px',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	[
		'attribute' => 'createdBy.username',
		'value'=>function ($model, $key, $index, $widget) {
			return Html::a($model->createdBy->username, ['/profile/view', 'id' => $model->createdBy->id]);
		},
		'format'=> 'raw',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	[
		'attribute' => 'created_at',
		'format' => 'date',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	//'updatedBy.username',
	//'updated_at:date',
	//'proposed',
	//'published',
];

if ($model->name === 'core') {
	$columns[] = [
		'attribute' => 'schema_org',
		'value'=>function ($model, $key, $index, $widget) {
			return Html::a($model->schema_org, 'https://schema.org/' . $model->schema_org, ['target' => '_blank']);
		},
		'format'=> 'raw',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	];
	$columns[] = ['class' => 'kartik\grid\ActionColumn', 'controller' => 'objects', 'template' => '{view}'];
}
else {
	$columns[] = ['class' => 'kartik\grid\ActionColumn', 'controller' => 'objects'];
}

if (isset($this->params['followers_notified'])) {
    $this->registerJs(
        '
		var options =  {
			content: "Your changes will be sent as notifications to ' . $this->params['followers_notified'] . ' followers!", // text of the snackbar
			style: "toast", // add a custom class to your snackbar
			timeout: 3000 // time in milliseconds after the snackbar autohides, 0 is disabled
		};

		$.snackbar(options);'
    );
}

if ($this->params['propose']) {
    $this->registerJs(
        '
		var options =  {
			content: "Your Proposal has been sent for approval to the Administrator", // text of the snackbar
			style: "toast", // add a custom class to your snackbar
			timeout: 3000 // time in milliseconds after the snackbar autohides, 0 is disabled
		};

		$.snackbar(options);'
    );
}

if (isset($this->params['followed'])) {
    if ($this->params['followed']) {
        $this->registerJs(
            '
			var options =  {
				content: "You now follow ' . $model->name . ' !", // text of the snackbar
				style: "toast", // add a custom class to your snackbar
				timeout: 3000 // time in milliseconds after the snackbar autohides, 0 is disabled
			};

			$.snackbar(options);'
        );
    }
	else {
        $this->registerJs(
            '
			var options =  {
				content: "You have unfollowed ' . $model->name . '", // text of the snackbar
				style: "toast", // add a custom class to your snackbar
				timeout: 3000 // time in milliseconds after the snackbar autohides, 0 is disabled
			};

			$.snackbar(options);'
        );
    }
}

// Are there things to recommend or not? If not, do not show anything for its UI.
$showRecommendation = false;
if (count($recommend['hits']['hits']) > 0)
{
    $showRecommendation = true;
}
?>

<div class="apis-view">

    <div class="row well">
        <h1 class="col-md-3 text-center">
            <?= Html::encode($this->title) ?>
            <br />
            <small>
                <?php if ($doIFollow) {?>
                    <?= Html::a($followers, ['unfollow', 'id' => $model->id], ['class' => 'unfollow glyphicon glyphicon-star nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Unfollow']) ?>
                <?php } else { ?>
                    <?= Html::a($followers, ['follow', 'id' => $model->id], ['class' => 'follow glyphicon glyphicon-star-empty nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Follow me!']) ?>
                <?php } ?>
                <?= Html::a($model->votes_up, ['voteup', 'id' => $model->id, 'redirect' => 'view?id=' . $model->id], ['class' => 'like glyphicon glyphicon-thumbs-up nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Up']) ?>
                <?= Html::a($model->votes_down, ['votedown', 'id' => $model->id, 'redirect' => 'view?id=' . $model->id], ['class' => 'unlike glyphicon glyphicon-thumbs-down nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Down']) ?>
            </small>
        </h1>
        <h3 class="col-md-9 text-center">
            <?= Html::encode($model->description) ?>
        </h3>
    </div>

    <div class="row">
        <h1 class="col-md-3 text-center">
            <small>
                <?php if ($model->name !== 'core') : ?>
                    <?php if ($model->status === 'Under Development'): ?>
                        <?= Html::a(Html::icon('bullhorn', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Propose']), ['propose', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
                    <?php elseif ($model->status === 'Under Review') : ?>
                        <?= Html::a(Html::icon('flash', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Under Review']), ['propose', 'id' => $model->id], ['class' => 'btn btn-info disabled']) ?>
                    <?php else : ?>
                        <?= Html::a(Html::icon('ok', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Approved']), ['propose', 'id' => $model->id], ['class' => 'btn btn-success disabled']) ?>
                    <?php endif; ?>
                    <?= Html::a(Html::icon('pencil', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Update']), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a(Html::icon('trash', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Delete']), ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post'
                        ]
                    ]) ?>

                    <!-- If admin then show choose Category page -->
                    <?php if (\Yii::$app->user->id === \app\models\User::findByUsername('admin')->id): ?>
                        <?= Html::a('Choose Category', ['choosecategory', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
                    <?php endif; ?>

                <?php endif; ?>
            </small>
        </h1>
        <h1 class="col-md-9 text-center">
            <?php if ($model->name !== 'core') : ?>
                <?= Html::a(Html::img('@web/images/standards/swagger.png', ['height' => '34px', 'width' => '94px']), ['swagger', 'id' => $model->id], ['class' => 'btn btn-primary img-standards']) ?>
                <?= Html::a(Html::img('@web/images/standards/hydra-cg.svg', ['height' => '20px', 'width' => '70px']), ['hydra', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Html::img('@web/images/standards/raml-logo.jpg', ['height' => '34px', 'width' => '94px']), ['raml', 'id' => $model->id], ['class' => 'btn btn-primary img-standards']) ?>
                <?= Html::a(Html::img('@web/images/standards/api-blueprint.jpg', ['height' => '34px', 'width' => '100px']), ['blueprint', 'id' => $model->id], ['class' => 'btn btn-primary img-standards']) ?>
                <?= Html::a('&nbsp;&nbsp;&nbsp;WADL&nbsp;&nbsp;&nbsp;', ['wadl', 'id' => $model->id], ['class' => 'btn btn-primary', 'height' => '34px', 'width' => '94px']) ?>
            <?php endif; ?>
        </h1>
    </div>

	<?php if (($model->status === 'Under Review') and ($model->published === 1)) : ?>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Information</h3>
			</div>
			<div class="panel-body">
				As your proposal for this API is under review, have in mind that the swagger interface is not fully functional.
			</div>
		</div>
	<?php endif; ?>

	<h3>Objects</h3>

	<?php if ($model->name !== 'core') : ?>
		<p>
		<?= Html::a(Html::icon('plus', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Create Object']), ['objects/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Html::icon('duplicate', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Duplicate Object']), ['objects/duplicate', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?php if ($showRecommendation) : ?>
            <?= Html::a(Html::icon('option-vertical', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Show me more']), null, ['class' => 'btn btn-success pull-right', 'id' => 'trig']) ?>
        <?php endif; ?>
		</p>
	<?php endif; ?>

    <div class="row">
        <div id="objects" class="col-md-12">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => $columns
            ]); ?>
        </div>
        <?php if ($showRecommendation) : ?>
        <div id="recommendation-api-block" class="col-md-0">
            <!-- If there are no Objects then we don't need padding-top -->
            <div class="panel panel-info recommendation-panel <?= count($dataProvider->getModels()) === 0 ? 'recommendation-panel-no-margin-top' : '' ?>">
                <div class="panel-heading">
                    <h3 class="panel-title">APIs to see</h3>
                </div>
                <ul class="recommendation-list list-group">
                    <?php
                        foreach ($recommend['hits']['hits'] as $rec)
                        {
                            echo '<li class="list-group-item">';
                            echo Html::a($rec['fields']['name'][0], ['view', 'id' => $rec['_id']]);
                            if (array_key_exists('inner_hits', $rec)) {
                                $show_objects_to_fork = false;
                                foreach ($rec['inner_hits'] as $innner_hitsRec) {
                                    if ($innner_hitsRec['hits']['total'] > 0) {
                                        $show_objects_to_fork = true;
                                    }
                                }
                                if ($show_objects_to_fork) {
                                    echo Html::a(Html::badge(Html::icon('chevron-right', ['class' => 'badge-success'])), null, ['class' => 'pull-right', 'id' => str_replace(' ', '', $rec['fields']['name'][0])]);
                                }
                            }
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <?php
            foreach ($recommend['hits']['hits'] as $key => $rec) {
                $recDivID = 'recommendation-object-block-'.str_replace(' ','',$rec['fields']['name'][0]);
                if (array_key_exists('inner_hits', $rec)) {
                    $objectsToShowNoDupsNames = [];
                    $objectsToShowNoDupsIds = [];
                    foreach ($rec['inner_hits'] as $innner_hitsRec) {
                        if ($innner_hitsRec['hits']['total'] > 0) {
                            foreach ($innner_hitsRec['hits']['hits'] as $perObjectRec) {
                                if (array_key_exists('_source', $perObjectRec)) {
                                    if (!in_array($perObjectRec['_source']['name'], $objectsToShowNoDupsNames)) {
                                        $objectsToShowNoDupsNames[] = $perObjectRec['_source']['name'];
                                        $objectsToShowNoDupsIds[] = $perObjectRec['_source']['id'];
                                    }
                                }
                            }
                        }
                    }
                    if (count($objectsToShowNoDupsNames) > 0) {
        ?>
            <div id="<?= $recDivID ?>" class="col-md-0 object-column">
                <!-- If it is the first Object then we don't need padding-top -->
                <div class="panel panel-info recommendation-panel <?= $key !== 0 ? 'recommendation-panel-no-margin-top' : '' ?>">
                    <div class="panel-heading">
                        <h3 class="panel-title">Objects to fork</h3>
                    </div>
                    <ul class="recommendation-list list-group">
        <?php
                    foreach ($objectsToShowNoDupsNames as $objectsKey => $objectName) {
                        echo '<li class="list-group-item">';
                        echo Html::a($objectName, ['/objects/view', 'id' => $objectsToShowNoDupsIds[$objectsKey]]);
                        echo '</li>';
                        $js_toggle = '
                                        $("#'.str_replace(' ','',$rec['fields']['name'][0]).'").on("click", function () {
                                            if ($(".col-md-2.object-column").not($("#'.$recDivID.'")).length) {
                                                $(".col-md-2.object-column").not($("#'.$recDivID.'")).toggleClass("col-md-0 col-md-2");
                                                $(".glyphicon-chevron-left").toggleClass("glyphicon-chevron-right glyphicon-chevron-left");
                                            }
                                            else {
                                                $("#objects").toggleClass("col-md-9 col-md-7");
                                            }
                                            $("#'.$recDivID.'").toggleClass("col-md-0 col-md-2");
                                            $("#'.$recDivID.'").toggleClass("fade");
                                            $("#'.str_replace(' ','',$rec['fields']['name'][0]).'>span>span").toggleClass("glyphicon-chevron-right glyphicon-chevron-left");
                                        });';
                        $this->registerJs($js_toggle, View::POS_END);
                    }
        ?>
                    </ul>
                </div>
            </div>
        <?php
                }
            }
        }
        ?>
        <?php endif; ?>
    </div>

	<h3>Comments</h3>

	<!-- Comments Section -->
	<?= Comments::widget([
		'dataProvider' => $commentsProvider,
		'repliesProvider' => $repliesProvider,
		'model' => $commentsModel
	]);	?>
	<!-- End Comments Section -->

</div>