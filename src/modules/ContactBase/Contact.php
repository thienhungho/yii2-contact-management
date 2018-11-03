<?php

namespace thienhungho\ContactManagement\modules\ContactBase;

use Yii;
use \thienhungho\ContactManagement\modules\ContactBase\base\Contact as BaseContact;

/**
 * This is the model class for table "contact".
 */
class Contact extends BaseContact
{
    const STATUS_CHECKED = 'checked';
    const STATUS_PENDING = 'pending';
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['subject', 'author_email', 'author_name', 'content'], 'required'],
            [['author_birth_date', 'created_at', 'updated_at'], 'safe'],
            [['content'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['subject', 'author_email', 'author_name', 'author_phone', 'author_stress_address', 'author_city', 'author_zip_code', 'status'], 'string', 'max' => 255],
            [['author_email'], 'email'],
            [['status'], 'default', 'value' => self::STATUS_PENDING]
        ]);
    }
	
}
