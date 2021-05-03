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
<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="images/discount/1.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4><b>Скидки до </b><span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="images/discount/2.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos">
                    <h3 class="bg-info"><b>Ваш помошник в мире </b><i>Амигуруми</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
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
                                                <form action="checkout.html" method="post">
                                                    <fieldset>
                                                        <input type="submit" name="submit" value="В корзину" class="button" />
                                                    </fieldset>
                                                </form>
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
    <div class="container">
        <h3>Top Products</h3>
        <div class="w3l_fresh_vegetables_grids">
            <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                <div class="w3l_fresh_vegetables_grid2">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="images/8.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <div class="w3l_fresh_vegetables_grid1_rel">
                            <img src="images/7.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                <div class="more m1">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="images/10.jpg" alt=" " class="img-responsive" />
                        <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                            <h5>Special Offers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="images/9.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="images/11.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="agileinfo_move_text">
                    <div class="agileinfo_marquee">
                        <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                    </div>
                    <div class="agileinfo_breaking_news">
                        <span> </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //fresh-vegetables -->