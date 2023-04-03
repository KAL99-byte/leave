<?php

namespace app\controllers;
use yii;

use app\models\Liv;
use yii\web\controller;
// use yii\app\controllers\Response;
use yii\web\Response;




class LivsController extends Controller
{
    // public function actionTemplate()
    // {
    //     return $this->render('template');
    // }



    public function actionAllliv(){
        $user = Yii::$app->db->createCommand('SELECT * FROM leaves WHERE status=0 ')->queryAll();
        return $this->render('allliv',['user'=>$user]);

    }

    public function actionAddliv()
    {
        $model= new Liv;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','Leave added successfully');
           return $this->redirect('livman');
        }
        return $this->render('addliv',['model'=>$model]);
    }

    public function actionLivman()
    {

        $user=Liv::find()->all();
        return $this->render('livman',['user'=>$user]);

      
    }
    
    public function actionEdit($uid)
    {
        $model=Liv::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','Leave saved successfully');
            return $this->redirect('livman');
        }
        return $this->render('edit',['model'=>$model]);
    }

public function actionDel($uid){
$user=Liv::findOne($uid);
    if($user){
        $user->delete();

        Yii::$app->session->setFlash('success','Employee has been deleted successfuly');
        return $this->redirect('livman');

    }

}
public function actionRejected()
{
    $user = Yii::$app->db->createCommand('UPDATE leaves SET status = 2 WHERE id = id AND status = 0')->execute();
    return $this->render('rejected',['user'=>$user]);
}


public function actionApproved()

    {

 $user = Yii::$app->db->createCommand('UPDATE leaves SET status = 1 WHERE id = id AND status = 0')->execute();
// $user = Yii::$app->db->createCommand('SELECT * FROM leaves WHERE status= 1 ')->queryAll();   
return $this->render('approved',['user'=>$user]);

    }  

}