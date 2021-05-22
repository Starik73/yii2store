<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Product */

$this->title = 'Добавить товар';
$this->params['breadcrumbs'][] = ['label' => 'Список продуктов :: ' . Yii::$app->name, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md12">
        <div class="box container" wfd-id="142">
            <div class="box-body" wfd-id="143">
                <div class="product-create">
                    <?= $this->render('_form', ['model' => $model]) ?>
                </div>
            </div>
        </div>
    </div>
</div>