<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone_book".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone_number
 * @property string $description
 * @property string $created_at
 */
class PhoneBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phone_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','phone_number'],'required', 'message'=> 'Не может быть пустым'],
            [['description'], 'string', 'max' => 255, 'message'=> 'Не более 255 символов'],
            [['created_at'], 'default', 'value' => date('Y-m-d H:i:sP')],
            [['name'], 'string', 'max' => 50, 'message'=> 'Должно до 255 символов'],
            [['phone_number'], 'string', 'message'=> 'Необходимо ввести номер телефона'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Имя',
            'phone_number' => 'Номер телефона',
            'description' => 'Описание',
            'created_at' => 'Дата дабовления',
        ];
    }
   public function  create_date($model, $attribute){
       
      return date('Y-m-d H:i:sP'); 
   }
}
