<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Order */

$this->title = "Заказ номер #{$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <div class="col-md-12">
        <div class="box" wfd-id="142">
            <div class="box-header" wfd-id="164">
                <h3 class="box-title">
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="143">

                <div class="order-view">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'created_at:date',
                            'updated_at:date',
                            'qty',
                            'total',
                            // 'status',
                            [
                                'attribute' => 'status',
                                'value' => function ($model) {
                                    if ($model->status == 0) {
                                        return '<span class="text-green">новый</span>';
                                    } elseif ($model->status == 1) {
                                        return '<span class="text-blue">ожидает оплаты</span>';
                                    } elseif ($model->status == 2) {
                                        return '<span class="text-red">завершен</span>';
                                    }
                                },
                                'format' => 'html',
                            ],
                            'name',
                            'email:email',
                            'phone',
                            'address',
                            'note:ntext',
                        ],
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Товары в заказе:
                </h3>
            </div>
            <div class="box-body">
                <?php if (!empty($model->orderProduct)) : ?>
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
                <?php else : ?>
                    <h3>Странный заказ - нет товаров</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>