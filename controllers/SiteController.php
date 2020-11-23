<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Click;
use app\models\Install;
use app\models\Trial;
use app\models\Postback;



class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
     * {@inheritdoc}
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

      /*if (!Yii::$app->user->isGuest) {
          return $this->goHome();
      }*/

      $model = new LoginForm();

      if ($model->load(Yii::$app->request->post()) && $model->login()) {

          return $this->redirect(['/postback']);
      }

      $model->password = '';

      return $this->render('index', [
          'model' => $model,
      ]);

    }
    public function actionPostback()
    {
      $request = Yii::$app->request;
      if($request->get()){
        if($request->get("event")=="click"){
          // создаем экземпляр класса
          $model = new Click;
          $model->cid = $request->get("cid");
          // добавляем название страны
          $model->campaign_id = $request->get("campaign_id");
          // добавляем населенность
          $model->click = $request->get("click");

          $model->date = date('Y-m-d H:i:s');
          // сохраняем запись, за место метода save() можно использовать метод insert() ($model->insert())
          $model->save();

        }
        if($request->get("event")=="install"){
          // создаем экземпляр класса
          $model = new Install;
          $model->cid = $request->get("cid");
          // добавляем название страны
          $model->campaign_id = $request->get("campaign_id");
          // добавляем населенность
          $model->install = $request->get("install");
          $model->date = date('Y-m-d H:i:s');
          // сохраняем запись, за место метода save() можно использовать метод insert() ($model->insert())
          $model->save();

        }
        if($request->get("event")=="trial"){
          // создаем экземпляр класса
          $model = new Trial;
          $model->cid = $request->get("cid");
          // добавляем название страны
          $model->campaign_id = $request->get("campaign_id");
          // добавляем населенность
          $model->trial = $request->get("trial");
          $model->date = date('Y-m-d H:i:s');
          // сохраняем запись, за место метода save() можно использовать метод insert() ($model->insert())
          $model->save();

        }
      }
      //$data = Postback::GetAll();

        $user = \Yii::$app->getUser()->getIdentity();

        if($user->isAdmin){
          $data = Click::GetAll();


          return $this->render('postback', [
            'dataProvider' => $data,
          ]);
        }
        $data = array();
        return $this->render('postback', [
          'dataProvider' => $data,
        ]);
    }



}
