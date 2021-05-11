<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3><b>Мягкие</b><span><i>игрушки</i></span><b>крючком</b></h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Заказать">Заказать</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3>Создай <span><i>плешевое</i></span> настроение.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Заказать">Заказать</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Ми-ми-ми <i>восторг</i> успех.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Заказать">Заказать</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->

<!-- top-brands -->
<?php if (!empty($offers)) : ?>
    <div class="top-brands">
        <div class="container">
            <h3>Hot Offers</h3>
            <div class="agile_top_brands_grids">
                <?php foreach ($offers as $offer) : ?>
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <?= Html::img('@web/images/offer.png', ['alt' => 'offer', 'class' => 'img-responsive']) ?>
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="<?= Url::to(['product/view', 'id' => $offer['id']]) ?>">
                                                    <?= Html::img('@web/products/' . $offer["img"], ['alt' => $offer['title'], 'class' => 'img-responsive']) ?>
                                                </a>
                                                <p class="text-info"><?= $offer['title'] ?></p>
                                                <h4>
                                                    <?= $offer['price'] ?> руб.
                                                    <?php if ($offer['old_price'] != 0) : ?>
                                                        <span><?= $offer['old_price'] ?></span>
                                                    <?php endif; ?>
                                                </h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <a href="<?= Url::to(['cart/add', 'id' => $offer['id']]) ?>" data-id="<?= $offer['id'] ?>" class="button add-to-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- //top-brands -->

<!-- fresh-vegetables -->
<div class="fresh-vegetables">
    <h3>Top Products</h3>
</div>
<div class="w3l_fresh_vegetables_grids">
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1">
            <div class="col-md-3 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images/discount/1.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4><b>Скидки до </b><span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images/discount/2.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos">
                        <h3 class="bg-info"><b>Ваш помошник в мире </b><i>Амигуруми</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="images/discount/3.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos1">
                        <h3 class="bg-info">Сохраните <span><b>тепло</b></span>детям и себе</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
</div>
<!-- //fresh-vegetables -->