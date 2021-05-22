<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список категорий';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md12">
        <div class="box" wfd-id="142">
            <div class="box-header" wfd-id="164">
                <h3 class="box-title"><?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" wfd-id="143">
                <div class="category-index">
                    <?php Pjax::begin(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            // ['class' => 'yii\grid\SerialColumn'],
                            'id',
                            'title',
                            // 'parent_id',
                            [
                                'attribute' => 'parent_id',
                                'value' => function($data) {
                                    $result = $data->category->title  ?? 'Самостоятельная категория';
                                    return '<u>'.$result.'</u>';
                                },
                                'format' => 'html',
                            ],
                            // 'description',
                            // 'keywords',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>