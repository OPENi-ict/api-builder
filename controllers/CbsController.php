<?php

namespace app\controllers;

use app\models\Apis;
use app\models\ApisSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * CbsController implements the CRUD actions for Cbs model.
 */
class CbsController extends Controller
{
    public function behaviors()
    {
        return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cbs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApisSearch();
        $queryParams = array_merge(['ApisSearch' => ['cbs' => 1]], Yii::$app->request->getQueryParams());
        $dataProvider = $searchModel->search($queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cbs model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cbs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Apis();
        $model->cbs = 1;
        $model->status = 'Under Review';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

	/**
	 * Updates an existing Cbs model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionPropose($id)
	{
		$model = $this->findModel($id);
		$new = new Apis();

		if ($new->load(Yii::$app->request->post())) {
			if (($new->version != $model->version) or ($new->url != $model->url))
			{
				$new->name = $model->name . '_v' . $new->version . '_by_' . \app\models\User::findIdentity(Yii::$app->getUser()->getId())->username;
                $new->cbs = 1;
				$new->description = $model->description;
				$new->status = 'pending';

				$new->save();
				return $this->redirect(['index']);
			}
		}

		return $this->render('propose', [
			'model' => $model,
		]);
	}

	/**
	 * Updates an existing Cbs model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

    /**
     * Deletes an existing Cbs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cbs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Apis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Apis::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
