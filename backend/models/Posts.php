<?php

namespace backend\models;

use Yii;


/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $small_description
 * @property string $Description
 * @property string $date
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'small_description', 'Description', 'date'], 'required'],
            [['small_description', 'Description'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
   
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'small_description' => 'Краткое описание',
            'Description' => 'Полное описание',
            'date' => 'Дата публикации',
        ];
    }

}
