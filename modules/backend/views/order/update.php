<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Order */

$this->title = "Редиатирование заказа № {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Заказ номер #{$model->id}", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = "Редиатирование";
?>

<div class="row">
    <div class="col-md-12">
        <div class="box" wfd-id="142">
            <div class="box-body">
                <div class="order-update">
                    <?= $this->render('_form', ['model' => $model,]) ?>
                </div>
            </div>
        </div>
    </div>
</div>