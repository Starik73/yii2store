<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Category */

$this->title = 'Добавить категирию';
$this->params['breadcrumbs'][] = ['label' => 'Список категорий', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Новая категория';
?>

<div class="row">
    <div class="col-md-12">
        <div class="box" wfd-id="142">
            <div class="box-body">

                <div class="category-update">

                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>