<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= Url::home() ?>">Home</a><span>|</span></li>
            <li>
                <a href="<?= Url::to(['category/view', 'id' => $category->id]) ?>"><?= $product->category->title ?></a>
                <span>|</span>
            </li>
            <li><?= $product->title; ?></li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>

    <div class="w3l_banner_nav_right">
        <div class="agileinfo_single">
            <h5><?= $product->title ?></h5>
            <div class="col-md-4 agileinfo_single_left">
                <?= Html::img("@web/products/{$product->img}", ['alt' => $product->title, 'id' => 'example']) ?>
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="w3agile_description">
                    <h4>Description :</h4>
                    <p><?= $product->content ?></p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4>
                            $<?= $product->price ?>
                            <?php if ((float)$product->old_price) : ?>
                                <span>$<?= $product->old_price ?></span>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <a href="<?= Url::to(['cart/add', 'id' => $product->id]) ?>" data-id="<?= $product->id ?>" class="button add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->

                <!-- top-brands -->
                <?php if (!empty($offers)) : ?>
                <div class="top-brands">
                <div class="container">
                    <h3>Hot Offers</h3>
                    <div class="row">
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
            <!-- top-brands -->