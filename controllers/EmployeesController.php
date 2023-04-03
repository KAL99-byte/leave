<?php

namespace app\controllers;
use yii;
use app\models\Employee;
use yii\web\controller;




class EmployeesController extends Controller
{
    // public function actionTemplate()
    // {
    //     return $this->render('template');
    // }
    public function actionAddemp()
    {
        $model= new Employee;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','Employee added successfully');
           return $this->redirect('empman');
        }
        return $this->render('addemp',['model'=>$model]);
    }

    public function actionEmpman()
    {

        $user=Employee::find()->all();
        return $this->render('empman',['user'=>$user]);
       
        // $user = Yii::$app->db->createCommand('SELECT * FROM department')->queryAll();
        //     return $this->render('depman',['user'=>$user]);



        // $user = Yii::$app->db->createCommand('SELECT * FROM department')->queryAll();
// $names = array_column($user, 'name');
// return $this->render('depman', ['user' => $names]);

      
    }
    
    public function actionEdit($uid)
    {
        $model=Employee::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','Employee saved successfully');
            return $this->redirect('empman');
        }
        return $this->render('edit',['model'=>$model]);
    }

public function actionDel($uid){
$user=Employee::findOne($uid);
    if($user){
        $user->delete();

        Yii::$app->session->setFlash('success','Employee has been deleted successfuly');
        return $this->redirect('empman');

    }

}
}