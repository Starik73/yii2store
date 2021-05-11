<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Статистика магазина :: ' . Yii::$app->name;
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua" wfd-id="368">
            <div class="inner" wfd-id="370">
                <h3><?= $orders ?></h3>
                <p>Заказов</p>
            </div>
            <div class="icon" wfd-id="369">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="<?= Url::to('backend/order/index') ?>" class="small-box-footer">
                Поддробнее <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green" wfd-id="364">
            <div class="inner" wfd-id="366">
                <h3><?= $categories ?></h3>
                <p>Категорий</p>
            </div>
            <div class="icon" wfd-id="365">
                <i class="fa fa-object-ungroup"></i>
            </div>
            <a href="<?= Url::to('backend/category/index') ?>" class="small-box-footer">
                Поддробнее <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow" wfd-id="360">
            <div class="inner" wfd-id="362">
                <h3><?= $products ?></h3>
                <p>Товаров</p>
            </div>
            <div class="icon" wfd-id="361">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= Url::to('backend/product/index') ?>" class="small-box-footer">
                Поддробнее <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>