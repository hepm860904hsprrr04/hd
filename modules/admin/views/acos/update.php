<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aco */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Aco',
]) . $model->aco_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Acos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aco_id, 'url' => ['view', 'id' => $model->aco_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="aco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
