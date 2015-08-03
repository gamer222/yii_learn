<?php
namespace app\modules\user\models;

use yii\base\Model;

class Record extends Model
{
	public $username;
	public $text;

	public function rules()
	{
		return [
			[['username','text'], 'required'],		
		];
	}

	public function attributeLabels()
	{
		return [
			'username' => 'Имя',
			'text' => 'Текст'
		];
	}
}