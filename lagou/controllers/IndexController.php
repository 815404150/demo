<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;


class IndexController extends Controller
{
    public $layout=false;
    public $enableCsrfValidation = false;
    /**
     * 后台首页
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * [actionDesign ]
     * @return [type] [description]
     */
    public function actionMenulists()
    {
       return $this->render('menu_lists');
    }
     public function actionMenuadd()
    {
       return $this->render('menu_add');
    }
     public function actionMenurevase()
    {
       return $this->render('menu_lists');
    }

    /**
     * [actionDesign ]
     * @return [type] [description]
     */
    public function actionInsert()
    {
       return $this->render('insert');
    }
}
