<?php

namespace app\modules\backend\controllers;

use app\modules\backend\models\Order;
use app\modules\backend\models\Product;
use app\modules\backend\models\Category;

/**
 * Default controller for the `backend` module
 */
class DefaultController extends AdminAppController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $orders = Order::find()->count();
        $products = Product::find()->count();
        $categories = Category::find()->count();
        return $this->render('index', compact('orders','products', 'categories'));
    }
}
