<?php
namespace app\controllers;

use app\models\Apis;
use app\models\Objects;
use Yii;
use app\models\LoginForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\ContactForm;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
		$objectsModel = new Objects();
		$objectsData = $objectsModel::find()->where(['privacy' => 'public'])
			->select('name')
			->asArray()
			->all();
		//$data = implode(', ', $data);
		$objectsData = array_column($objectsData, 'name');

		// If this is a POST, then search has been conducted and the user is redirected to the object selected.
		if ($nameId = Yii::$app->request->post('Objects')) {
			$objectModel = $this->findObjectModelByName($objectsData[$nameId["name"]]);
			return $this->redirect(['/objects/view', 'id' => $objectModel->id]);
		}

//		$resourcesUsedDataProvider = new ActiveDataProvider([
//			'query' => $apiModel::find()->orderBy(['used' => SORT_DESC]),
//			'sort' => false
//		]);

		$objectsRecentDataProvider = new ActiveDataProvider([
			'query' => $objectsModel::find()->where(['privacy' => 'public'])->orderBy(['created_at' => SORT_DESC]),
			'sort' => false,
			'pagination' => array(
				'pageSize' => 10,
			),
		]);

		$objectsLikedDataProvider = new ActiveDataProvider([
			'query' => $objectsModel::find()->where(['privacy' => 'public'])->orderBy(['votes_up' => SORT_DESC]),
			'sort' => false,
			'pagination' => array(
				'pageSize' => 10,
			),
		]);
		return $this->render('index', [
			'objectsModel' => $objectsModel,
			'objectsData' => $objectsData,
			//'resourcesUsedDataProvider' => $resourcesUsedDataProvider,
			'objectsRecentDataProvider' => $objectsRecentDataProvider,
			'objectsLikedDataProvider' => $objectsLikedDataProvider,
		]);
//        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

	/**
	 * Finds the Objects model based on its name.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param string $name
	 * @return Objects the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findObjectModelByName($name)
	{
		if (($model = Objects::findOne(['name' => $name])) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
