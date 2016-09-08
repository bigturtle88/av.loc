<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
/* @var $this yii\web\View */
/* @var $model app\models\PhoneBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phone-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'phone_number')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+38 (999) 99-99-999',
]) ?>  

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
