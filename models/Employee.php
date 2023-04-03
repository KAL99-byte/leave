<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Employee extends ActiveRecord
{

    public static function tableName()
    {
        return 'employees';


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

           [['first_name','last_name','email','gender','birth_date','dept_name','address','city'],'required'],
           ['email','email'],
           ['email','unique'],
           [['status', 'created_by' ,'created_at' ,'updated_at','updated_by'],'safe'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'first_name'=>'First Name',
            'last_name'=>'Last Name',
            'email'=>'Email',
            'gender'=>'Gender',
            'birth_date'=>'Birth date',
            'dept_name'=>'Department Name',
            'address'=>'Address',
            'city'=>'City',
            'phone_number'=>'Phone Number',
            'password'=>'Password',
           
        ];
    }
}

