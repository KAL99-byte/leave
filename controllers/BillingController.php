<?php

namespace app\controllers;

use yii\base\Controller;

use app\models\Billing;

use yii\helpers\Json;
use yii;


class BillingController extends Controller
{


public function actionIndex()
{
   
    $ovf = "SELECT YEAR(ACTIVATION_DATE) AS YR, COUNT(FLIGHT_SCOPE) AS OVERFLY FROM FLIGHT_INFO 
    WHERE FLIGHT_OPERATION='OVERFLY' AND YEAR(ACTIVATION_DATE)!='NULL' AND YEAR(ACTIVATION_DATE)>'2017' GROUP BY YR ORDER BY YR ASC";
   $ovfs = Yii::$app->db2->createCommand($ovf)->queryAll();

   $IntArrival = "SELECT YEAR(ACTIVATION_DATE) AS YR, COUNT(FLIGHT_SCOPE) AS ARRIVAL FROM FLIGHT_INFO 
   WHERE YEAR(ACTIVATION_DATE)!='NULL' AND FLIGHT_OPERATION='ARRIVAL' AND FLIGHT_SCOPE='INTERNATIONAL' AND YEAR(ACTIVATION_DATE)>'2017' GROUP BY YR ORDER BY YR ASC";

   $IntArrivals = Yii::$app->db2->createCommand($IntArrival)->queryAll();

   $IntDepart = "SELECT YEAR(ACTIVATION_DATE) AS YR, COUNT(FLIGHT_SCOPE) AS DEPART FROM FLIGHT_INFO 
   WHERE YEAR(ACTIVATION_DATE)!='NULL' AND FLIGHT_OPERATION='DEPARTURE' AND FLIGHT_SCOPE='INTERNATIONAL' AND YEAR(ACTIVATION_DATE)>'2017' GROUP BY YR ORDER BY YR ASC";

   $IntDeparts = Yii::$app->db2->createCommand($IntDepart)->queryAll();

   //     return print_r($IntDeparts);
   //      exit;


   // Overflight by Month
   $mwaka = "SELECT YEAR(ACTIVATION_DATE) AS YR FROM FLIGHT_INFO  WHERE YEAR(ACTIVATION_DATE)!='NULL' GROUP BY YR ORDER BY YR ASC";
   $mwks = Yii::$app->db2->createCommand($mwaka)->queryColumn();
   $flightDataByYear = [];
   foreach ($mwks as $mwk) {
       $ovf = "SELECT MONTH(ACTIVATION_DATE) AS MWEZI, YEAR(ACTIVATION_DATE) AS YR, COUNT(FLIGHT_SCOPE) AS OVERFLY 
                FROM FLIGHT_INFO WHERE FLIGHT_OPERATION ='OVERFLY'  AND YEAR(ACTIVATION_DATE)='$mwk' AND MONTH(ACTIVATION_DATE)!='NULL'
                GROUP BY MWEZI,YR ORDER BY MWEZI";
       $ovfd = Yii::$app->db2->createCommand($ovf)->queryAll();
       $flightDataByYear[$mwk] = $ovfd;
   }




   return $this->render('index', [
       'ovfs' => $ovfs,
       'IntArrivals' => $IntArrivals,
       'IntDeparts' => $IntDeparts,
       'flightDataByYear' => $flightDataByYear

   ]);
   }
   
}