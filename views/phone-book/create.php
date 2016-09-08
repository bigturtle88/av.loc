<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhoneBook */

$this->title = 'Добавить номер';
$this->params['breadcrumbs'][] = ['label' => 'Phone Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-book-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
