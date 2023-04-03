<?php

namespace app\controllers;
use yii;
use app\models\Department;
use yii\web\controller;




class DepartmentsController extends Controller
{
    // public function actionTemplate()
    // {
    //     return $this->render('template');
    // }
    public function actionAdddep()
    {
        $model= new Department;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','User added successfully');
           return $this->redirect('depman');
        }
        return $this->render('adddep',['model'=>$model]);
    }

    public function actionDepman()
    {

        // $user=Department::find()->all();
        // return $this->render('depman',['user'=>$user]);
       
        $user = Yii::$app->db->createCommand('SELECT * FROM department')->queryAll();
            return $this->render('depman',['user'=>$user]);



   

      
    }
    
    public function actionEdit($uid)
    {
        $model=Department::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','user saved successfully');
            return $this->redirect('depman');
        }
        return $this->render('edit',['model'=>$model]);
    }

public function actionDel($uid){
$user=Department::findOne($uid);
    if($user){
        $user->delete();

        Yii::$app->session->setFlash('success','The department has been deleted successfuly');
        return $this->redirect('depman');

    }

}
}