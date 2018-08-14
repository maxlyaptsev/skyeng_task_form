<?php
namespace app\controllers;

use yii\helpers\Url;
use yii\web\Controller;

class RegisterController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    /**
     * Displays registration page.
     *
     * @return string
     */
    public function actionIndex()
    {
        $user = new User();

        if ($user->load(\Yii::$app->request->post()) && $user->save()) {
            return $this->redirect(Url::to('/site/index'));
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

}