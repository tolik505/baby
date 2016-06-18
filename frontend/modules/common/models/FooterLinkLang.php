<?php

namespace frontend\modules\common\models;

use Yii;

/**
 * This is the model class for table "{{%footer_link_lang}}".
 *
 * @property integer $l_id
 * @property integer $model_id
 * @property string $lang_id
 * @property string $label
 * @property string $url
 */
class FooterLinkLang extends \frontend\components\FrontModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%footer_link_lang}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'lang_id', 'label', 'url'], 'required'],
            [['model_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 5],
            [['label', 'url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'model_id' => 'Model ID',
            'lang_id' => 'Lang ID',
            'label' => 'Label',
            'url' => 'Url',
        ];
    }
}
