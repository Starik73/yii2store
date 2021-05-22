<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\MenuWidget;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use kartik\file\FileInput;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <div class="form-group field-category-parent_id has-success" wfd-id="52">
                <label class="control-label" for="category-parent_id" wfd-id="55">Родительская категория</label>
                <select id="category-parent_id" class="form-control" name="Product[category_id]" wfd-id="54" aria-invalid="false">
                    <?= MenuWidget::widget([
                        'tpl' => 'select_product',
                        'model' => $model,
                        'cache_time' => 0,
                    ]) ?>
                </select>
                <div class="help-block" wfd-id="53"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'is_offer')->dropDownList(['Нет', 'Да']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <?php if ($model->img) : ?>
            <div class="col-md-3">
                <div class="form-group field-product-file">
                    <label class="control-label" for="exist-img">Загруженное фото:</label>
                    <?= Html::img($model->img, ['class' => 'img-responsive', 'id' => 'exist-img']) ?>
                </div>
            </div>
        <? endif; ?>
        <div class="col-md-9">
            <?= $form->field($model, 'file')->widget(FileInput::class, [
                'options' => ['accept' => 'products/*'],
                'pluginOptions' => [
                    'showPreview' => true,
                    'showCaption' => false,
                    'showRemove' => true,
                    'showUpload' => true
                ]
            ]); ?>
            <? //= $form->field($model, 'img')->textInput(['maxlength' => true]) 
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'content')->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
            ]);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>