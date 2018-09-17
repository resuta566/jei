<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "license".
 *
 * @property int $id
 * @property string $restriction
 * @property string $condition
 * @property string $expireDate
 *
 * @property User[] $users
 */
class License extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'license';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restriction'], 'required'],
            [['expireDate','register_date'], 'safe'],
            [['restriction', 'condition'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'restriction' => 'Restriction',
            'condition' => 'Condition',
            'register_date' => "Registered Date",
            'expireDate' => 'Expire Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['license_id' => 'id']);
    }
}
