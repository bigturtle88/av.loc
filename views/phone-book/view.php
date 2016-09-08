<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PhoneBook */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Phone Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Вернуться к списку', ['index'],['class' => 'btn btn-primary']) ?>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Точно удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'name',
            'phone_number',
            'description:ntext',
            'created_at',
        ],
    ]) ?>

</div>
