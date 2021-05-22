<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Список категорий', 'url' => ['index']];
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
            <div class="box-body" wfd-id="143">
                <div class="category-view">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            // 'parent_id',
                            [
                                'attribute' => 'parent_id',
                                'value' => isset($model->category->title) ? '<a href=' . Url::to(['category/view', 'id' => $model->category->id]) . '>' . $model->category->title . '</a>' : 'Самостоятельная категория',
                                'format' => 'html',
                            ],
                            'title',
                            'description',
                            'keywords',
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
                    Товары в данной категории:
                </h3>
            </div>
            <div class="box-body">
                <?php if (!empty($model->product)) : ?>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($model->product as $product) : ?>
                                    <tr>
                                        <td><?= $product->id ?></td>
                                        <td><?= $product->title ?></td>
                                        <td><?= $product->price ?></td>
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