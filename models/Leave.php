<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Leave extends ActiveRecord
{

    public static function tableName()
    {
        return 'leavetypes';
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

           [['leave_type','description'],'required'],
           ['leave_type','unique'],
           [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe']

        ];
    }

    public function attributeLabels()
    {
        return [
            'leave_type'=>'Leave Type',
            'description'=>'Description',
        ];
    }
}

