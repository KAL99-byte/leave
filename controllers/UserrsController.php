<?php

namespace app\controllers;
use yii;

use yii\web\controller;
use app\models\Userr;




class UserrsController extends Controller
{
    public function actionAddusr()
    {
        $model= new Userr;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','User added successfully');
           return $this->redirect('usrman');
        }
        return $this->render('addusr',['model'=>$model]);
    }

    public function actionUsrman()
    {

        $user=Userr::find()->all();
        return $this->render('usrman',['user'=>$user]);
       
      

      
    }
    
    public function actionEdit($uid)
    {
        $model=Userr::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','User saved successfully');
            return $this->redirect('usrman');
        }
        return $this->render('edit',['model'=>$model]);
    }

public function actionDel($uid){
$user=Userr::findOne($uid);
    if($user){
        $user->delete();

        Yii::$app->session->setFlash('success','User has been deleted successfuly');
        return $this->redirect('usrman');

    }

}





}