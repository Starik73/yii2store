<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Cart extends Model
{
    public function addToCart($product, $qty = 1)
    {
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->id] = [
               'title' => $product->title,
               'price' => $product->price,
               'qty' => $qty,
               'img' => $product->img,
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? ($_SESSION['cart.sum'] + $qty * $product->price) : ($qty * $product->price);
    }

    public function recalc($id)
    {
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart.qty'] -= $_SESSION['cart'][$id]['qty'];
            $_SESSION['cart.sum'] -= ($_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price']);
            unset($_SESSION['cart'][$id]);
        } else {
            return false;
        }
    }

    public function removeOne($id)
    {
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['qty'] -= 1;
            $_SESSION['cart.qty'] -= 1;
            $_SESSION['cart.sum'] -= $_SESSION['cart'][$id]['price'];
            if ($_SESSION['cart'][$id]['qty'] == 0) {
                unset($_SESSION['cart'][$id]);
            }
        } else {
            return false;
        }
    }

    public function addOne($id)
    {
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['qty'] += 1;
            $_SESSION['cart.qty'] += 1;
            $_SESSION['cart.sum'] += $_SESSION['cart'][$id]['price'];
        } else {
            return false;
        }
    }
}