<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aco */

$this->title = $model->aco_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Acos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aco-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->aco_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->aco_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'aco_id',
            'description',
            'url:url',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
