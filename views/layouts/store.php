<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <base href="/">
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <!-- header -->
    <div class="agileits_header">
        <div class="w3l_offers">
            <a href="products.html">Новые предложения!</a>
        </div>
        <div class="w3l_search">
            <form action="<?= Url::to('search') ?>" method="get">
                <input type="text" name="search" value="Найти продукты..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Найти продукты...';}" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <div class="product_list_header">
            <button onclick="getCart()" type="button" class="button" data-toggle="modal" data-target="#modal-cart">
                <b>
                    <span class="cart-sum">
                        $<?= $_SESSION['cart.sum'] ?? '0' ?>
                    </span>
                </b>
            </button>
            <!-- Cart -->
            <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="black" aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Корзина</h4>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                            <a href="<?= Url::to(['cart/checkout']) ?>" class="btn btn-success">Оформить заказ</a>
                            <button onclick="clearCart()" type="button" class="btn btn-danger">Очистить корзину</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart -->
        </div>
        <div class="w3l_header_right">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                    <div class="mega-dropdown-menu">
                        <div class="w3ls_vegetables">
                            <ul class="dropdown-menu drp-mnu">
                                <li><a href="login.html">Вход</a></li>
                                <li><a href="login.html">Регистрация</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w3l_header_right1">
            <h2><a href="mail.html">Написать</a></h2>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="<?= Url::home() ?>"><span>Амигуруми</span>Магазин</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="events.html">События</a><i>/</i></li>
                    <li><a href="about.html">О нас</a><i>/</i></li>
                    <li><a href="products.html">Лучшие предложения</a><i>/</i></li>
                    <li><a href="services.html">Услуги</a></li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+7 (904) 195 24 55</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@amigurumi.ru</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->

    <?= $content ?>

    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>Подписаться на обновления</h3>
            </div>
            <div class="w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="Подписаться">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 w3_footer_grid">
                <h3>Информация</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="events.html">События</a></li>
                    <li><a href="about.html">О нас</a></li>
                    <li><a href="products.html">Лучшие предложения</a></li>
                    <li><a href="services.html">Услуги</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>policy info</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="faqs.html">FAQ</a></li>
                    <li><a href="privacy.html">privacy policy</a></li>
                    <li><a href="privacy.html">terms of use</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>what in stores</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="pet.html">Pet Food</a></li>
                    <li><a href="frozen.html">Frozen Snacks</a></li>
                    <li><a href="kitchen.html">Kitchen</a></li>
                    <li><a href="products.html">Branded Foods</a></li>
                    <li><a href="household.html">Households</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>twitter posts</h3>
                <ul class="w3_footer_grid_list1">
                    <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
                            eius modi tempora incidunt ut labore et
                            <a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                    <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
                            eius modi tempora incidunt ut labore et
                            <a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="agile_footer_grids">
                <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h4>100% secure payments</h4>
                        <img src="images/card.png" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h5>connect with us</h5>
                        <ul class="agileits_social_icons">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="wthree_footer_copy">
                <p>© <?= date('Y') ?> Амигуруми. All rights reserved </p>
            </div>
        </div>
    </div>
    <!-- //footer -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>