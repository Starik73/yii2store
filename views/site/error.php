<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use Yii;

$this->title = $name;
?>
<div class="site-error">
    <div class="container text-center">

        <h1><?= Html::encode($this->title) ?></h1>

        <div class="alert alert-info">
           <b> <?= nl2br(Html::encode($message)) ?> </b>
        </div>

        <p>
        Вернуться на главную страницу
        </p>
        <p class="p-5 m-5">
            <a class='btn btn-success p-5 m-5' href="<?=Yii::$app->homeUrl?>" > Главная страница </a>
        </p>
    </div>
</div>