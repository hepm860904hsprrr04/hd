<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aco */

$this->title = Yii::t('app', 'Create Aco');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Acos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aco-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
