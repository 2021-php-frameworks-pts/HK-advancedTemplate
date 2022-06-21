<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class bmiResult extends Model
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */


     public function calculateBmi($weight, $height){
         return $weight / ($height * $height);
     }
}
