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
            <div class="box-header" wfd-id="164">
                <h3 class="box-title"><?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="143">
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]);
                ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    // 'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        'created_at',
                        // 'updated_at',
                        // 'qty',
                        'total',
                        'status',
                        'name',
                        'email:email',
                        'phone',
                        // 'address',
                        'note:ntext',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<div class="order-index">







    <p>

    </p>
</div>