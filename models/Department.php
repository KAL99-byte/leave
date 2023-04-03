<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Department extends ActiveRecord
{

    public static function tableName()
    {
        return 'department';


    }
    public function behaviors()
   {
        return [
            BlameableBehavior::class,
            [
                'class'=>TimestampBehavior::class,
                'value'=>new Expression('NOW()')
            ],
        ];
    }
    public function rules()
    {
        return[

           [['dept_name','dept_short_name','dept_code'],'required'],
           ['dept_code','unique'],
           [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe']

        ];
    }

    public function attributeLabels()
    {
        return [
            'dept_name'=>'Department Name',
            'dept_code'=>'Department Code'
        ];
    }
}

