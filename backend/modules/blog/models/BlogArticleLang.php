<?php

namespace backend\modules\blog\models;

use Yii;
use kartik\builder\Form;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "{{%blog_article_lang}}".
 *
 * @property integer $l_id
 * @property integer $model_id
 * @property string $lang_id
 * @property string $label
 * @property string $description
 */
class BlogArticleLang extends \backend\components\BackModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_article_lang}}';
    }

}
