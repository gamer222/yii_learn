<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/*
* use Models
*/

use app\modules\admin\models\Contact;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContact()
    {
    	$model = new Contact();

    	return $this->render('contact',[
    		'model' => $model
    	]);
    }
}
