<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class TelController extends Controller{

    public $enableCsrfValidation = false;

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionLogin1()
    {
        $tel = Yii::$app -> request -> post('tel');

        $pwd = Yii::$app -> request -> post('pwd');

        $db = new \yii\db\Query;

        $data = $db -> select('*') -> from('tel') -> where(['tel' => $tel,'pwd' => $pwd]) -> one();

        if(!$data)
        {
            return $this -> render('login1');
        }
        else
            {
                echo "<h1>登录成功！</h1>";
            }
    }

    public function actionLogin2()
    {
        $tel = Yii::$app -> request -> post('tel');

        $pwd = Yii::$app -> request -> post('pwd');

        $db = new \yii\db\Query;

        $data = $db -> select('*') -> from('tel') -> where(['tel' => $tel,'pwd' => $pwd]) -> one();

        if(!$data)
        {
            return $this -> render('login2');
        }
        else
        {
            echo "<h1>登录成功！</h1>";
        }
    }

    public function actionLogin3()
    {
        $tel = Yii::$app -> request -> post('tel');

        $pwd = Yii::$app -> request -> post('pwd');

        $db = new \yii\db\Query;

        $data = $db -> select('*') -> from('tel') -> where(['tel' => $tel,'pwd' => $pwd]) -> one();

        if(!$data)
        {
            return $this -> render('login3');
        }
        else
        {
            echo "<h1>登录成功！</h1>";
        }
    }
}