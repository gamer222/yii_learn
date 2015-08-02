<?php
namespace app\modules\admin\models;

use yii\base\Model;
use Yii;

class Contact extends Model
{
	public $username;
	public $email;
	public $text;

	public function rules()
	{
		return [
			[['username', 'email', 'text'], 'required'],
			['email','email']
		];
	}

	public function attributeLabels()
	{
		return [
			'username' => 'Имя',
			'email' => 'Эл.Адрес',
			'text' => 'Текст'
		];
	}
}