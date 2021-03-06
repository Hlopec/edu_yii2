<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_category".
 *
 * @property int $id
 * @property string $category_id
 * @property string $category_name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'category_name'], 'required'],
            [['category_id', 'category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
        ];
    }

    public function getPosts(){
        return $this->hasMany(Posts::className(), ['category_id' => 'id']);
    }
}