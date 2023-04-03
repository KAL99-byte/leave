<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Liv extends ActiveRecord
{

    public static function tableName()
    {
        return 'leaves';


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

           [['leave_type','leave_description','to_date','from_date'],'required'],
          
           [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe']

        ];
    }

    public function attributeLabels()
    {
        return [
            'leave_type'=>'Leave Type',
            'leave_description'=>'Leave Description',
        ];
    }
}

