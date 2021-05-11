<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\LoginForm;
use yii\web\Response;


/**
 * Default controller for the `backend` module
 */
class AuthController extends AdminAppController
{
    public $layout = 'auth';
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/backend');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/backend');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/backend');
    }
}
