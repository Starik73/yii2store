<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список товаров :: ' . Yii::$app->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md12">
        <div class="box" wfd-id="142">
            <div class="box-header" wfd-id="164">
                <h3 class="box-title"><?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="143">
                <div class="product-index">
                    <?php Pjax::begin(); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            // ['class' => 'yii\grid\SerialColumn'],
                            // 'id',
                            // 'category_id',
                            [
                                'attribute' => 'category_id',
                                'value' => function($data){
                                    return $data->category_id . ' :: ' . $data->category->title;
                                },
                                'format' => 'html',
                            ],
                            'title',
                            // 'content:ntext',
                            'price',
                            'old_price',
                            //'description',
                            //'keywords',
                            [
                                'format' => 'html',
                                'attribute' => 'img',
                                'value' => function($data){
                                    return $data->img;
                                },
                                'format' => ['image', ['width' => 50]],
                            ],
                            // 'is_offer',
                            [
                                'attribute' => 'is_offer',
                                'value' => function($data) {
                                    $result = $data->is_offer ? 'Да' : 'Нет';
                                    return '<u>'.$result.'</u>';
                                },
                                'format' => 'html',
                            ],
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>