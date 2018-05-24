<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "human".
 *
 * @property int $id
 * @property int $license_id
 * @property int $vehicle_id
 * @property string $last_name
 * @property string $first_name
 * @property string $address
 * @property string $phone
 * @property string $sex
 * @property string $bdate
 * @property string $weight
 * @property string $height
 * @property string $nationality
 * @property string $age
 *
 * @property License $license
 * @property Vehicle $vehicle
 */
class Human extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'human';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['license_id', 'vehicle_id', 'last_name', 'first_name', 'address', 'phone', 'sex'], 'required'],
            [['license_id', 'vehicle_id'], 'integer'],
            [['address'], 'string'],
            [['bdate'], 'safe'],
            [['last_name'], 'string', 'max' => 60],
            [['first_name'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 12],
            [['sex'], 'string', 'max' => 1],
            [['weight', 'height'], 'string', 'max' => 10],
            [['nationality'], 'string', 'max' => 20],
            [['age'], 'string', 'max' => 99],
            [['license_id'], 'exist', 'skipOnError' => true, 'targetClass' => License::className(), 'targetAttribute' => ['license_id' => 'id']],
            [['vehicle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['vehicle_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'license_id' => 'License ID',
            'vehicle_id' => 'Vehicle ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'sex' => 'Sex',
            'bdate' => 'Bdate',
            'weight' => 'Weight',
            'height' => 'Height',
            'nationality' => 'Nationality',
            'age' => 'Age',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLicense()
    {
        return $this->hasOne(License::className(), ['id' => 'license_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }
}
