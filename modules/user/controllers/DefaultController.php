<?php

namespace app\modules\user\controllers;

use yii\web\Controller;

/* Use models classes app\modules\user\models */

use app\modules\user\models\Record;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRecord()
    {
    	$model = new Record();

    	return $this->render('record', ['model' => $model]);
    }
}
