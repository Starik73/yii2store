<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use app\widgets\Alert;
?>
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= Url::home() ?>">Home</a><span>|</span></li>
            <li>Оформление заказа</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>

    <div class="w3l_banner_nav_right">
        <!-- about -->
        <div class="privacy about">
            <?= Alert::widget() ?>
            <?php if (isset($_SESSION['cart.qty']) && $_SESSION['cart.qty'] != 0) : ?>
                <h3 id="checkout">Оформление <span>заказа</span></h3>
                <div class="checkout-right">
                    <h4>Всего товаров в корзине: <span> <?= $_SESSION['cart.qty'] ?></span></h4>
                    <div class="cart-table">
                        <div class="overlay">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Изображение</th>
                                    <th>Количество</th>
                                    <th>Название</th>
                                    <th>Цена</th>
                                    <th>Сумма</th>
                                    <th>Убрать</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $id => $product) : ?>
                                    <tr>
                                        <td class="invert"><?= $id ?></td>
                                        <td class="invert-image">
                                            <a href="<?= Url::to(['product/view', 'id' => $id]) ?>"><?= Html::img("@web/products/{$product['img']}", ['alt' => $product['title'], 'class' => 'h-50']) ?></a>
                                        </td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <a href="<?= Url::to(['cart/value-minus', 'id' => $id]) ?>" class="entry value-minus">&nbsp;</a>
                                                    <div onclick="" class="entry value"><span><?= $product['qty'] ?></span></div>
                                                    <a href="<?= Url::to(['cart/value-plus', 'id' => $id]) ?>" class="entry value-plus">&nbsp;</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert"><?= $product['title'] ?></td>
                                        <td class="invert">$ <?= $product['price'] ?></td>
                                        <td class="invert"><b>$ <?= number_format((float)($product['price'] * $product['qty']), 2) ?><b></td>
                                        <td class="invert">
                                            <div class="rem">
                                                <a href="<?= Url::to(['cart/del-product', 'id' => $id]) ?>">
                                                    <div class="close1"> </div>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Информация о заказе:</h4>
                        <ul>
                            <?php foreach ($_SESSION['cart'] as $product) : ?>
                                <li>
                                    <?= $product['title'] ?>
                                    <i>-</i>
                                    <span><?= number_format((float)($product['price'] * $product['qty']), 2) ?></span>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                        <p>Итоговая стоимость: <span class="text-danger"><b>$<?= number_format((float)($_SESSION['cart.sum']), 2) ?></b></span></p>
                    </div>
                    <div class="col-md-8 address_form_agile panel panel-default">
                        <?php $form = ActiveForm::begin([
                            'id' => 'order-form',
                            'options' => ['class' => 'creditly-card-form agileinfo_form'],
                        ]) ?>
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <h4 class="mt-10">Данные покупателя</h4>
                            <div class="first-row">
                                <?= $form->field($order, 'name') ?>
                                <?= $form->field($order, 'email') ?>
                                <?= $form->field($order, 'phone')->widget(MaskedInput::class, [
                                    'mask' => '+9(999)999-9999',
                                ]) ?>
                                <?= $form->field($order, 'address') ?>
                                <?= $form->field($order, 'note')->textarea(['rows' => 5]) ?>
                            </div>
                            <?= HTML::submitButton('Заказать', $options = ['class' => 'submit check_out']) ?>
                        </section>
                        <?php $form = ActiveForm::end() ?>
                        <div class="checkout-right-basket">
                            <a href="payment.html">Оплатить <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php else : ?>
                <h3>Оформление <span>заказа</span></h3>
                <div class="checkout-right text-center">
                    <h4>В Вашей корзине нет товаров</h4>
                    <a href="<?= Url::home() ?>" class="btn btn-success">Продолжить покупки</a>
                </div>
            <?php endif; ?>
        </div>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->