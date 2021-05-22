<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6"> <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?> </div>
        <div class="col-md-6"> <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?> </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList($items = [
                '0' => 'Новый',
                '1' => 'Ожидает оплаты',
                '2' => 'Завершен',
            ], $options = []) ?>
        </div>
        <div class="col-md-6"> <?= $form->field($model, 'qty')->textInput() ?> </div>
        <div class="col-md-6"> <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?> </div>
        <div class="col-md-6"> <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?> </div>
        <div class="col-md-12"> <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?> </div>
        <div class="col-md-6"> <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?> </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info']) ?>
    </div>

</div>

<?php ActiveForm::end(); ?>

</div>