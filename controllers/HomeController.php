<?php

namespace app\controllers;

use app\models\Product;

class HomeController extends AppController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $offers = Product::find()
            ->where(['is_offer' => 1])
            ->asArray(['id'])
            ->limit(4)
            ->all();
        // debug($offers);
        return $this->render('index', compact('offers'));
    }
}
