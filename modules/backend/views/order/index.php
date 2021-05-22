<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список заказов :: ' . Yii::$app->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md12">
        <div class="box" wfd-id="142">
            <div class="box-body" wfd-id="143">
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]);
                ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    // 'filterModel' => $searchModel,
                    'columns' => [
                        // ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'name',
                        'email:email',
                        'phone',
                        'total',
                        [
                            'attribute' => 'status',
                            'value' => function ($data) {
                                if ($data->status == 0) {
                                    return '<span class="text-green">новый</span>';
                                } elseif ($data->status == 1) {
                                    return '<span class="text-blue">ожидает оплаты</span>';
                                } elseif ($data->status == 2) {
                                    return '<span class="text-red">завершен</span>';
                                }
                            },
                            'format' => 'html',
                        ],
                        // 'status',
                        'created_at:date',
                        'note:ntext',
                        // 'updated_at',
                        // 'qty',
                        // 'address',
                        ['class' => 'yii\grid\ActionColumn', 'header' => 'Действия'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
            <div class="box-header" wfd-id="164">
                <h3 class="box-title"><?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?></h3>
            </div>
        </div>
    </div>
</div>
<div class="order-index">







    <p>

    </p>
</div>