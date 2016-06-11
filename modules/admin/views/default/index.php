<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Admin');
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="nav nav-pills">
  <li role="presentation"><a href="<?php echo Url::to(['/admin/users/']);?>"><?=Yii::t('app', 'Users')?></a></li>
  <li role="presentation"><a href="<?php echo Url::to(['/admin/groups/']);?>"><?=Yii::t('app', 'Groups')?></a></li>
  <li role="presentation"><a href="<?php echo Url::to(['/admin/acos/']);?>"><?=Yii::t('app', 'Acos')?></a></li>
  <li role="presentation"><a href="<?php echo Url::to(['/admin/privileges/']);?>"><?=Yii::t('app', 'Privileges')?></a></li>
</ul>