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
        <div class="box">
            <div class="box-body">
                <div class="order-update">
                    <?= $this->render('_form', ['model' => $model,]) ?>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12">
        <div class="box">
            <?php if (!empty($model->orderProduct)) : ?>
                <div class="box-header">
                    <h3 class="box-title">
                        Товары в заказе:
                    </h3>
                </div>
                <div class="box-body">
                    <div class="order">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Кол-во</th>
                                        <th>Цена</th>
                                        <th>Сумма</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($model->orderProduct as $product) : ?>
                                        <tr>
                                            <td><?= $product->id ?></td>
                                            <td><?= $product->title ?></td>
                                            <td><?= $product->qty ?></td>
                                            <td><?= $product->price ?></td>
                                            <td><?= $product->total ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="box-header">
                    <h3>Странный заказ - нет товаров</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>