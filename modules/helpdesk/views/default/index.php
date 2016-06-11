<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Help Desk');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-inline">
		  <div class="form-group">
			<label class="sr-only" for="product_id"><?=Yii::t('app', 'Product')?> </label>
			<div class="input-group">
			  <div class="input-group-addon"><?=Yii::t('app', 'Product')?>: </div>
					<select class="form-control">
					  <option value="Apple">Apple</option>
					  <option value="Banana">Banana</option>
					  <option value="Orange">Orange</option>
					  <option value="Pear">Pear</option>
					  <option value="Peach">Peach</option>
					</select>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label class="sr-only" for="msisdn"><?=Yii::t('app', 'Msisdn')?> </label>
			<div class="input-group">
			  <div class="input-group-addon"><?=Yii::t('app', 'Msisdn')?>: </div>
			  <input type="text" class="form-control" id="msisdn" placeholder="<?=Yii::t('app', 'Write here...')?>">
			  <span class="input-group-btn">
				<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <?=Yii::t('app', 'Search')?></button>
			  </span>
			  
			</div>
		  </div>		  
		</form>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><?=Yii::t('app', 'Resultados')?></div>
	<table class="table table-striped">
		<thead> 
			<tr> 
				<th><?=Yii::t('app', 'Subscription Id')?></th> 
				<th><?=Yii::t('app', 'Msisdn')?></th> 
				<th><?=Yii::t('app', 'Request Date')?></th> 
				<th><?=Yii::t('app', 'Cancelation Date')?></th> 
				<th><?=Yii::t('app', 'First Charge')?></th> 
				<th><?=Yii::t('app', 'Last Charge')?></th> 
				<th><?=Yii::t('app', 'Media')?></th> 
				<th><?=Yii::t('app', 'Keyword')?></th> 
				<th><?=Yii::t('app', 'Service')?></th> 
				<th><?=Yii::t('app', 'Credits')?></th> 
				<th><?=Yii::t('app', 'Charges')?></th> 
				<th><?=Yii::t('app', 'Status')?></th> 
				<th><?=Yii::t('app', 'Cancel')?></th> 
			</tr> 
		</thead> 
		<tbody> 
		
		</tbody> 
	</table>
</div>