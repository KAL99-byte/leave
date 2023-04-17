<?php

use yii\helpers\Html;
use yii\helpers\Url;

// Get branch count and user count
$branchCount = \app\models\Branch::find()->count();
$userCount = \app\models\Userr::find()->count();

// Generate HTML markup for the branch count icon
$branchIcon = Html::tag('i', '', ['class' => 'bi bi-grid-3x3-gap']);
$branchText = Html::tag('span', $branchCount, ['class' => 'badge badge-pill badge-primary']);


$branchLink = Html::a($branchIcon . ' Branch ' . $branchText, Url::to(['branchs/depman']), ['class' => 'btn btn-outline-primary btn-block']);
$branchDiv = Html::tag('div', $branchLink, ['class' => 'col-md-6 mb-3']);

// Generate HTML markup for the user count icon
$userIcon = Html::tag('i', '', ['class' => 'bi bi-person-square']);
$userText = Html::tag('span', $userCount, ['class' => 'badge badge-pill badge-primary']);
$userLink = Html::a($userIcon . ' User ' . $userText, Url::to(['userrs/usrman']), ['class' => 'btn btn-outline-primary btn-block']);
$userDiv = Html::tag('div', $userLink, ['class' => 'col-md-6 mb-3']);

// Combine the HTML markup for the branch and user count icons
echo Html::tag('div', $branchDiv . $userDiv, ['class' => 'row']);
