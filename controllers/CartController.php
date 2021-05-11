<?php

/**
 * Created by PhpStorm.
 * User: Astashenkov
 * Date: 27.04.2021
 * Time: 17:14
 */

namespace app\controllers;

use yii\helpers\Url;
use app\models\Cart;
use app\models\Product;
use app\models\Order;
use app\models\OrderProduct;
use Yii;

class CartController extends AppController
{
    /**
     * actionAdd
     *
     * @param  mixed $id
     * @return void
     */
    public function actionAdd($id)
    {
        $product = Product::findOne($id);

        if (empty($product)) {
            return false;
        }

        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product);
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('cart-modal', compact('session'));
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * actionShow
     *
     * @return void
     */
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();

        return $this->renderPartial('cart-modal', compact('session'));
    }

    /**
     * actionDelItem
     *
     * @param  mixed $id
     * @return void
     */
    public function actionDelItem($id)
    {
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->recalc($id);

        return $this->renderPartial('cart-modal', compact('session'));
    }

    /**
     * actionClear
     *
     * @return void
     */
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        unset($session['cart']);
        unset($session['cart.sum']);
        unset($session['cart.qty']);

        return $this->renderPartial('cart-modal', compact('session'));
    }

    /**
     * actionCheckout
     *
     * @return void
     */
    public function actionCheckout()
    {
        $session = Yii::$app->session;
        $session->open();

        $order = new Order();
        $order_product = new OrderProduct();

        if ($order->load(Yii::$app->request->post()) & isset($session['cart.qty'])) {
            $order->qty = $session['cart.qty'];
            $order->total = $session['cart.sum'];
            $transaction = Yii::$app->getDb()->beginTransaction();
            if (!$order->save() || !$order_product->saveOrderProducts($session['cart'], $order->id)) {
                Yii::$app->session->setFlash('error', 'Ошибка ошормления заказа');
                $transaction->rollBack();
            } else {
                $transaction->commit();
                Yii::$app->session->setFlash('success', 'Заказ успешно оформлен');

                Yii::$app->mailer->compose('views\order', [
                    'order' => $order,
                    'session' => $session
                ])
                    ->setFrom(Yii::$app->params['senderEmail'])
                    ->setTo($order->email)
                    ->setSubject('Новый заказ на сайте, №' . $order->id)
                    ->send();

                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            }
        };

        $title = 'Оформение заказа';
        $this->setMeta("{$title} :: " . Yii::$app->name);

        return $this->render('checkout', compact('session', 'order', 'order_product'));
    }

    /**
     * actionValueMinus
     *
     * @param  mixed $id
     * @return void
     */
    public function actionValueMinus($id)
    {
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->removeOne($id);

        return $this->redirect(Yii::$app->request->referrer . '#checkout');
    }

    public function actionValuePlus($id)
    {
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addOne($id);

        return $this->redirect(Yii::$app->request->referrer . '#checkout');
    }

    public function actionDelProduct($id)
    {
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->recalc($id);

        return $this->redirect(Yii::$app->request->referrer . '#checkout');
    }
}
