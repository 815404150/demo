<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Login;

/**
 * 后台登陆控制器
 */
class LoginController extends Controller
{

    public $layout=false;
    public $enableCsrfValidation = false;
    /**
     * [actionLogin 后台展示、登录]
     * @return [type] [description]
     */
    public function actionLogin()
    {
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $user = $post['user'];
            $pwd = $post['pwd'];
            $article = new login();
            $info = $article->find()->where(["user" => $user,"pwd"=>$pwd])->one();
            if($info){
                $this->redirect(array('/index/index')); 
            }else{
                $this->redirect(array('/login/login'));
            }
        }else{
            return $this->render('login');
        }
    }
}
