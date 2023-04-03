<?php

namespace app\controllers;
use yii;
use app\models\Leave;
use yii\web\controller;




class LeavesController extends Controller
{
    public function actionLeave()
    {
        $model= new Leave;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success','Leave added successfully');
           return $this->redirect('manleave');
        }
        return $this->render('leave',['model'=>$model]);
    }
    public function actionManleave()
    {
        $user=Leave::find()->all();
        return $this->render('manleave',['user'=>$user]);
    }

    public function actionEdit($uid)
    {
        $model=Leave::findOne($uid);

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','Leave type saved successfully');
            return $this->redirect('manleave');
        }
        return $this->render('edit',['model'=>$model]);
    }

  
        
        public function actionDel($uid){
            $user=Leave::findOne($uid);
                if($user){
                    $user->delete();
            
                    Yii::$app->session->setFlash('success','The department has been deleted successfuly');
                    return $this->redirect('manleave');
            
                }
                Yii::$app->session->setFlash('success','user is not found');
            return $this->redirect('manleave');
            }
    }
