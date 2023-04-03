<?php

namespace app\controllers;
use yii;

use app\models\Livv;
use yii\web\controller;
// use yii\app\controllers\Response;
use yii\web\Response;




class LivvsController extends Controller
{
  
    public function actionAllliv(){
        $user = Yii::$app->db->createCommand('SELECT * FROM leaves  ')->queryAll();
      

        return $this->render('allliv', ['user'=>$user]);

    }

    public function actionAllliv3(){
        $user = Yii::$app->db->createCommand('SELECT * FROM leaves WHERE status=0 ')->queryAll();
      

        return $this->render('allliv3', ['user'=>$user]);

    }

    public function actionRejectliv(){
        $user = Yii::$app->db->createCommand('SELECT * FROM leaves WHERE status=2 ')->queryAll();
      

        return $this->render('allliv1', ['user'=>$user]);

    }

    public function actionApprovedliv(){
        $user = Yii::$app->db->createCommand('SELECT * FROM leaves WHERE status=1 ')->queryAll();
      

        return $this->render('allliv2', ['user'=>$user]);

    }

    public function actionAddliv()
    {
        $model= new Livv;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','Leave added successfully');
           return $this->redirect('allliv');
        }
        return $this->render('addliv',['model'=>$model]);
    }

    
    public function actionEdit($uid)
    {
        $model=Livv::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','Leave saved successfully');
            return $this->redirect('allliv');
        }
        return $this->render('edit',['model'=>$model]);
    }


public function actionRejected($id)
{

    
            $updatedRows = Yii::$app->db->createCommand('UPDATE leaves SET status = 2 WHERE id= :id and status = 0',[':id' => $id])->execute();
    
        
            return $this->redirect('rejectliv');

        }     
      
    



public function actionApproved($id)

    {
        
 // Update the status of approved leave requests
 $updatedRows = Yii::$app->db->createCommand('UPDATE leaves SET status = 1 WHERE id= :id and status = 0',[':id' => $id])->execute();
    
 return $this->redirect('approvedliv');  


// $user = Yii::$app->db->createCommand('SELECT * FROM leaves WHERE status=1 ')->queryAll();
// return $this->render('approved',['user'=>$user]);


}
}