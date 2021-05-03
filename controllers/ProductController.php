<?php
/**
 * Created by PhpStorm.
 * User: Astashenkov
 * Date: 27.04.2021
 * Time: 17:14
 */

namespace app\controllers;

use app\models\Product;
use app\models\Category;
use yii\web\NotFoundHttpException;
use Yii;

class ProductController extends AppController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionView($id)
    {

        $product = Product::findOne($id);
        if(empty($product)){
            throw new NotFoundHttpException("Данного продукта нет в нашем магазине...");
            
        }

        $this->setMeta("{$product->title} :: " . Yii::$app->name, $product->keywords, $product->description);

        $category = Category::findOne($product->category_id);

        return $this->render('view',compact('product', 'category'));
    }
}