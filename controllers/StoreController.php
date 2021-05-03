<?php

namespace app\controllers;

use app\models\Product;
use yii\data\Pagination;
use Yii;

class StoreController extends AppController
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionSearch()
    {
        $search = trim(Yii::$app->request->get('search'));

        $this->setMeta("{$search} :: " . Yii::$app->name);

        if (!$search) {
            return $this->render('search');
        }

        $query = Product::find()->where(['LIKE', 'title', $search]);

        $pages = new Pagination([
            'totalCount' => $query->count(), 
            'pageSize' => 8,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            ]);

        $products = $query
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('search',[
            'pages' =>  $pages,
            'products' => $products,
            'search' => $search
        ]);

    }
}
