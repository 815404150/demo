<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use \app\models\Login;

/**
 * 前台首页右侧导航
 */
class MenuController extends Controller
{
    public $layout=false;
    public $enableCsrfValidation = false;

    /**
     * [actionDesign ]
     * @return [type] [description]
     */
    public function actionMenulists()
    {
        $db = new \yii\db\Query;
        $data=$db->select('*')->from('login')->all();
        return $this->render('menu_lists',['data'=>$data]);
    }
    public function actionMenujudgment(){
        $name = Yii::$app->request->post('user');
        $db = new \yii\db\Query;
        $data=$db->select('user')->from('login')->where(['user'=>"$name"])->one();
        if($data){
            $msg=2;
        }else{
            $msg=1;
        }
        echo json_encode($msg);
    }


     public function actionMenuinsert()
    {
//        echo 123;
       return $this->render('menu_insert');
    }

    public function actionMenuinsert1()
    {
//        echo 123;die;
        $name = Yii::$app->request->post('user');
        $pwd = Yii::$app->request->post('pwd');
        $data = \Yii::$app->db->createCommand()->insert('login' , ['user'=>"$name",'pwd'=>"$pwd"] )->execute();
        if($data){
            return $this->redirect(['menu/menulists']);
        }
    }

     public function actionMenurevase()
        {
            $id = Yii::$app->request->get('id');
        $db = new \yii\db\Query;
        $data=$db->select('*')->from('login')->where(['id'=>"$id"])->one();
        return $this->render('menu_revase',['data'=>$data]);
    }


    public function actionMenuupdate()
    {
        $id = Yii::$app->request->post('id');
        $user = Yii::$app->request->post('user');
        $pwd = Yii::$app->request->post('pwd');
        $model = new login();
        $model::updateAll(['user'=>$user,'pwd'=>$pwd],['id'=>$id]);
        return $this->redirect(['menu/menulists']);
    }

    public function actionMenudelete()
    {
        $id = Yii::$app->request->get('id');
        $model = new login();
        $model::deleteAll(['id'=>$id]);
        return $this->redirect(['menu/menulists']);
    }
}