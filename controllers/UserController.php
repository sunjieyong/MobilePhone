<?php
/**
 * Created by PhpStorm.
 * User: mayingying
 * Date: 14-9-23
 * Time: 下午2:10
 */

namespace app\controllers;
use Yii;
use yii\rest\Controller;
use yii\data\ActiveDataProvider;

class UserController extends Controller
{
    public $modelClass = 'app\models\User';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    //Index
    public function actionIndex()
    {
        $modelClass = $this->modelClass;
        return new ActiveDataProvider([
            'query' => $modelClass::find(),
        ]);
    }
    //View
    public function actionView($id)
    {
        Yii::$app->user->identity;
        $modelClass = $this->modelClass;
        $model = $modelClass::findOne($id);
        return $model;
    }
    //Search
    public function actionSearch($keyword)
    {
        $result=$keyword;
        return $result;
    }
    //Register
    public function actionRegister()
    {
        $result=$this->data();
        return $result;
    }
    //Login
    public function actionLogin()
    {
        $result=$this->data();
        return $result;
    }
}