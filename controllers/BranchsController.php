<?php

namespace app\controllers;
use yii;
use app\models\Branch;
use yii\web\controller;




class BranchsController extends Controller
{
   
    public function actionAdddep()
    {
        $model= new Branch;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','Branch added successfully');
           return $this->redirect('depman');
        }
        return $this->render('adddep',['model'=>$model]);
    }

    public function actionDepman()
    {

      
       
        $user = Yii::$app->db->createCommand('SELECT * FROM branch')->queryAll();
            return $this->render('depman',['user'=>$user]);
    }
    
    public function actionEdit($uid)
    {
        $model=Branch::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','Branch saved successfully');
            return $this->redirect('depman');
        }
        return $this->render('edit',['model'=>$model]);
    }

public function actionDel($uid){
$user=Branch::findOne($uid);
    if($user){
        $user->delete();

        Yii::$app->session->setFlash('success','Branch has been deleted successfuly');
        return $this->redirect('depman');

    }

}
}