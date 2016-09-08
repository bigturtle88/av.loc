<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhoneBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phone Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-book-index">

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить номер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'phone_number',
            'description:ntext',
           // 'created_at',

          ['class' => 'yii\grid\ActionColumn',
                          'template'=>'{update}{delete}',
                            'buttons'=>[
                              'delete' => function ($url, $model) {     
                                  return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Delete'),
                                        'data-confirm' => Yii::t('yii', 'Точно удалить?'),
                                        'data-method' => 'post',
                                ]);                                
            
                              }
                          ]                            
                            ],
        ],
    ]); ?>
</div>
