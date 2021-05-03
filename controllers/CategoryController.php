<?php
/**
 * Created by PhpStorm.
 * User: Astashenkov
 * Date: 27.04.2021
 * Time: 17:14
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\web\NotFoundHttpException;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController
{
        /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionView($id)
    {
        $category = Category::findOne($id);
        if (empty($category)) {
            throw new NotFoundHttpException("Данной категории не существует");
        }

        $this->setMeta("{$category->title} :: " . Yii::$app->name, $category->keywords, $category->description);

        // $products = Product::find()->where(['category_id' => $id])->all();

        $query = Product::find()->where(['category_id' => $id]);

        $pages = new Pagination([
            'totalCount' => $query->count(), 
            'pageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            ]);

        $products = $query
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('view',[
            'category' => $category,
            'product_id' => $id,
            'pages' =>  $pages,
            'products' => $products,
        ]);
    }
}