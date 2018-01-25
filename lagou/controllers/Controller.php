<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

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


}
