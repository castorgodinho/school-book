<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $mname
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property string $image_url
 * @property string $date
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'email', 'password', 'auth_key', 'image_url', 'date'], 'required'],
            [['date'], 'safe'],
            [['fname'], 'string', 'max' => 25],
            [['lname'], 'string', 'max' => 15],
            [['mname'], 'string', 'max' => 35],
            [['email'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 20],
            [['auth_key'], 'string', 'max' => 10],
            [['image_url'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'mname' => 'Mname',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'image_url' => 'Image Url',
            'date' => 'Date',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne(["user_id" => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->user_id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_Key === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function findByUsername($email)
    {
        return self::findOne(['email' => $email]);
    }

}
