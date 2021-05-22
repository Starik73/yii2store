<?php 
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Главное меню</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?= Url::to('backend/default/index') ?>"><i class="fa fa-check-square-o"></i> <span>Статистика магазина</span></a></li>
            <li><a href="<?= Url::to('backend/order/index') ?>"><i class="fa fa-file-text"></i> <span>Работа с заказами</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-shopping-cart"></i> <span>Товары</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::to('backend/product/index') ?>">Список товаров</a></li>
                    <li><a href="<?= Url::to('backend/product/create') ?>">Добавить товар</a></li>
                </ul>
                <li class="treeview">
                <a href="#"><i class="fa fa-cubes"></i> <span>Категории</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::to('backend/category/index') ?>">Список категорий</a></li>
                    <li><a href="<?= Url::to('backend/category/create') ?>">Добавить категорию</a></li>
                </ul>
            </li>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>