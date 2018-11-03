<?php

namespace thienhungho\ContactManagement\modules\ContactBase\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "{{%contact}}".
 *
 * @property integer $id
 * @property string $subject
 * @property string $author_email
 * @property string $author_name
 * @property string $author_phone
 * @property string $author_birth_date
 * @property string $author_stress_address
 * @property string $author_city
 * @property string $author_zip_code
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Contact extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'author_email', 'author_name', 'content'], 'required'],
            [['author_birth_date', 'created_at', 'updated_at'], 'safe'],
            [['content'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['subject', 'author_email', 'author_name', 'author_phone', 'author_stress_address', 'author_city', 'author_zip_code', 'status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contact}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subject' => Yii::t('app', 'Subject'),
            'author_email' => Yii::t('app', 'Author Email'),
            'author_name' => Yii::t('app', 'Author Name'),
            'author_phone' => Yii::t('app', 'Author Phone'),
            'author_birth_date' => Yii::t('app', 'Author Birth Date'),
            'author_stress_address' => Yii::t('app', 'Author Stress Address'),
            'author_city' => Yii::t('app', 'Author City'),
            'author_zip_code' => Yii::t('app', 'Author Zip Code'),
            'content' => Yii::t('app', 'Content'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }


    /**
     * @inheritdoc
     * @return \thienhungho\ContactManagement\modules\ContactBase\query\ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \thienhungho\ContactManagement\modules\ContactBase\query\ContactQuery(get_called_class());
    }
}
