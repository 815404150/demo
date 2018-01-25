<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 2017/12/18
 * Time: 9:11
 */
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use \app\models\Login;

class UploadController extends Controller{

    public $enableCsrfValidation = false;

    public function actionPage(){

        $price=Yii::$app->request->get('price');

        $prices=Yii::$app->request->get('prices');
//        print_r($price);

        if(!empty($prices) && !empty($price) ){

            $data = Yii::$app->db->createCommand("select * from search where price>='$price' AND price<='$prices'")->queryAll();

        }else{

            $db = new \yii\db\Query;

            $data=$db->select('*')->from('search')->all();

        }

        return $this->render('search',['data'=>$data]);

    }

    public function actionPrice(){

        $price=Yii::$app->request->post('price');
        $prices=Yii::$app->request->post('prices');
//        echo $price.",".$prices;die;
         return $this->redirect(['upload/page'],['price'=>$price,'prices'=>$prices]);

    }

}