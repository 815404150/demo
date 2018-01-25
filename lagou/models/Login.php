<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property string $id
 * @property string $user
 * @property string $pwd
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'pwd'], 'required'],
            [['user', 'pwd'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'pwd' => 'Pwd',
        ];
    }
}
