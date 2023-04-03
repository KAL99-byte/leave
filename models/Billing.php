<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Billing extends ActiveRecord
{

    public static function tableName()
    {
        return 'FLIGHT_INFO';
    }

    public static function getDb()
    {
        return \Yii::$app->db2;
    }
    public function behaviors()

    {
        return [
            BlameableBehavior::class, ['class' => TimestampBehavior::class, 'value' => new Expression('NOW()')],
        ];
    }
    public function rules()

    {
        return [
            [['ACTIVATION_DATE','FLIGHT_SCOPE'], 'required'],
        ];
    }
}
