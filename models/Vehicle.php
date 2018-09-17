<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $make
 * @property string $model
 * @property string $year
 * @property string $color
 * @property string $expiration_date
 *
 * @property User[] $users
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['make', 'model', 'color','plate_no'], 'required'],
            [['year', 'expiration_date','register_date'], 'safe'],
            [['make', 'model'], 'string', 'max' => 60],
            [['color'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'make' => 'Make',
            'model' => 'Model',
            'plate_no' => 'Plate Number',
            'year' => 'Year',
            'color' => 'Color',
            'register_date' => 'Registration Date',
            'expiration_date' => 'Expiration Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['vehicle_id' => 'id']);
    }
}
