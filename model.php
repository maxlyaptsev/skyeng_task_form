<?php
namespace common\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $fio
 * @property string $email
 * @property integer $type
 * @property integer $taxNumber
 * @property string $companyName
 */
class User extends ActiveRecord implements IdentityInterface
{

	const TYPE_PERSON = 1;

	const TYPE_LEGAL = 2;

	 /**
     * @inheritdoc
     */
     public function rules()
     {
         return [
             [['fio', 'email'], 'required'],
             ['type', 'in', 'range' => [self::TYPE_PERSON, self::TYPE_LEGAL]],
             [['taxNumber'], 'integer', 'length' => 12],
             [['companyName'], 'safe'],
             [['email'], 'unique'],
         ];
     }

 }