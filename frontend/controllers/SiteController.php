<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

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
            /*'error' => [
                'class' => 'yii\web\ErrorAction',
                //'layout' => '/clear',
            ],*/
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = '/landing';

        if ($post = Yii::$app->request->post('newsletter')) {
            
            $news = new \common\models\Customers();
            $news->email = $post;
            $news->save();

            return $this->refresh();
        }

        return $this->render('index');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionError()
    {
        $this->layout = '/clear';

        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays a restaurant page.
     *
     * @return mixed
     */
    public function actionRestaurant()
    {
        $this->layout = '/features';

        return $this->render('restaurant');
    }

    /**
     * Displays a conference hall page.
     *
     * @return mixed
     */
    public function actionHall()
    {
        $this->layout = '/features';

        return $this->render('hall');
    }

    /**
     * Displays a banquet page.
     *
     * @return mixed
     */
    public function actionBanquet()
    {
        $this->layout = '/features';

        return $this->render('banquet');
    }

    /**
     * Displays a spa page.
     *
     * @return mixed
     */
    public function actionSpa()
    {
        $this->layout = '/features';

        return $this->render('spa');
    }

    /**
     * Displays a fitness page.
     *
     * @return mixed
     */
    public function actionGym()
    {
        $this->layout = '/features';

        return $this->render('gym');
    }

    public function actionDownload($path) 
    {
        $file = Yii::getAlias('@webroot') . $path;

        if (file_exists($file)){
            Yii::$app->response->sendFile($file);
        } 
    }
}
