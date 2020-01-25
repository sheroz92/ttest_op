<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apple".
 *
 * @property int $id
 * @property string $color
 * @property int $date_create
 * @property int|null $date_fall
 * @property int|null $status 0-in_tree, 1-fall
 * @property int $eat
 */
class Apple extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apple';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color', 'date_create', 'color'], 'required'],
            [['date_create', 'date_fall', 'status', 'eat'], 'integer'],
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
            'color' => 'Color',
            'date_create' => 'Date Create',
            'date_fall' => 'Date Fall',
            'status' => 'Status',
            'eat' => 'Eat',
        ];
    }
}
