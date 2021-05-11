<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order_product".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $title
 * @property float $price
 * @property int $qty
 * @property float $total
 */
class OrderProduct extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'title', 'qty', 'total'], 'required'],
            [['order_id', 'product_id', 'qty'], 'integer'],
            [['price', 'total'], 'number'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Номер заказ',
            'product_id' => 'ID продукта',
            'title' => 'Название',
            'price' => 'Стоимость',
            'qty' => 'Количество',
            'total' => 'Итого',
        ];
    }

    /**
     * saveOrderProducts
     *
     * @return void
     */
    public function saveOrderProducts($products, $order_id)
    {
        if (!empty($products)) {
            foreach ($products as $product_id => $product) {
                $this->id = null;
                $this->isNewRecord = true;
                $this->order_id = $order_id;
                $this->product_id = $product_id;
                $this->title = $product['title'];
                $this->price = $product['price'];
                $this->qty = $product['qty'];
                $this->total = $product['price'] * $product['qty'];
                if (!$this->save()) {
                    return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }
}
