<?php

namespace thienhungho\ContactManagement\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * @param $email
     *
     * @return \BaseApp\mail\modules\Mail\Mailer|bool
     * @throws \yii\base\InvalidConfigException
     */
    public function sendEmail($email)
    {
        return send_mail(
            'no-reply',
            get_app_name(),
            $email, $this->subject,
            $this->body,
            'html',
            '/contact/html',
            [
                'title' => 'This is title',
                'contact_name' => $this->name,
                'contact_email' => $this->email,
            ]
        );
    }
}
