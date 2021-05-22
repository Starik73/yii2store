<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\MenuWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <div class="form-group field-category-parent_id has-success" wfd-id="52">
                <label class="control-label" for="category-parent_id" wfd-id="55">Родительская категория</label>
                <select id="category-parent_id" class="form-control" name="Category[parent_id]" wfd-id="54" aria-invalid="false">
                    <option value="0">Самостоятельная категория</option>
                    <?= MenuWidget::widget([
                        'tpl' => 'select',
                        'model' => $model,
                        'cache_time' => 0,
                    ]) ?>
                </select>

                <div class="help-block" wfd-id="53"></div>
            </div>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
        </div>

    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>