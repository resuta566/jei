<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cpu".
 *
 * @property int $id
 * @property string $brand
 * @property string $prodname
 * @property string $sku
 */
class Cpu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cpu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand', 'prodname', 'sku'], 'required'],
            [['brand', 'prodname'], 'string', 'max' => 50],
            [['sku'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Brand',
            'prodname' => 'Prodname',
            'sku' => 'Sku',
        ];
    }
}
