<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Branch extends ActiveRecord
{

    public static function tableName()
    {
        return 'branch';


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

           [['branch_name','branch_short_name','branch_code'],'required'],
           ['branch_code','unique'],
           [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe']

        ];
    }

    public function attributeLabels()
    {
        return [
            'branch_name'=>'Branch Name',
            'branch_code'=>'Branch Code'
        ];
    }
}

