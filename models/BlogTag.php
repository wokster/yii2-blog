<?php

namespace wokster\blog\models;

use Yii;

/**
 * This is the model class for table "blog_tag".
 *
 * @property integer $id
 * @property integer $blog_id
 * @property integer $tag_id
 */
class BlogTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_id', 'tag_id'], 'required'],
            [['blog_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_id' => 'Blog ID',
            'tag_id' => 'Tag ID',
        ];
    }
    public function getTag(){
        return $this->hasOne(Tag::className(),['id'=>'tag_id']);
    }
}
