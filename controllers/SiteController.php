<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


/*
* include models classes
*/

use app\models\UserForm;

class SiteController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionUser()
    {
    	$model = new UserForm;

    	
    	if($model->load(Yii::$app->request->post()) && $model->validate())
    	{
    		Yii::$app->session->setFlash('success', 'You have entered the data correctly');
    	}
    	
    	return $this->render('userForm',['model' => $model]);
    }
}