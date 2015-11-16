<?php

namespace frontend\models;

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
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, emailYii::t('app', 'USER_USERNAME_REQUIRED'), subject and body are required
            [['name', 'email', 'subject', 'body'], 'required', 'message' => Yii::t('app', 'CONTACT_ALL_REQUIRED')],
            // email has to be a valid email address
            ['email', 'email', 'message' => Yii::t('app', 'CONTACT_EMAIL_CORRECT')],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'verifyCode' => 'Verification Code',
            'name' => Yii::t('app', 'CONTACT_USERNAME'),
            'email' => Yii::t('app', 'CONTACT_EMAIL'),
            'subject' => Yii::t('app', 'CONTACT_SUBJECT'),
            'body' => Yii::t('app', 'CONTACT_TEXT'),
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
