<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Список товаров :: ' . Yii::$app->name, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <div class="col-md12">
        <div class="box" wfd-id="142">
            <div class="box-header" wfd-id="164">
                <h3 class="box-title">
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="143">
                <div class="product-view">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            // 'category_id',
                            [
                                'attribute' => 'category_id',
                                'value' => function ($model) {
                                    return '<u>' . $model->category_id . ' :: ' . $model->category->title . '</u>';
                                },
                                'format' => 'html',
                            ],
                            'title',
                            'content:html',
                            'price',
                            'old_price',
                            'description',
                            'keywords',
                            // 'img',
                            [
                                'attribute' => 'img',
                                'value' => $model->img,
                                'format' => ['image', ['width' => 100]],
                            ],
                            // 'is_offer',
                            [
                                'attribute' => 'is_offer',
                                'value' => function ($model) {
                                    $result = $model->is_offer ? 'Да' : 'Нет';
                                    return '<u>' . $result . '</u>';
                                },
                                'format' => 'html',
                            ],
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>