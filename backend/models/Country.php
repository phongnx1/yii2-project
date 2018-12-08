<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $ID
 * @property string $NAME
 * @property int $POPULATION
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'NAME', 'POPULATION'], 'required'],
            [['ID', 'POPULATION'], 'integer'],
            [['NAME'], 'string', 'max' => 256],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NAME' => 'N A M E',
            'POPULATION' => 'P O P U L A T I O N',
        ];
    }
}
