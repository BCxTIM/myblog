<?php
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Posts;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
         <h1> Мой блог </h1>
    </div>

    <div class="body-content">

        <div class="row">
            <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
        //['class' => 'yii\grid\SerialColumn', 'header'=>'№'],

        /** 
         * ссылка на заголовок
        **/
            [
        'attribute' => 'title',
        'value' => function (Posts $data) {
            return Html::a(Html::encode($data->title), Url::to(['view', 'id' => $data->id]));
        },
        'format' => 'raw',
    ],
            'small_description:ntext',
            'Description:ntext',
            'date',
             

           // ['class' => 'yii\grid\ActionColumn', 'header' => 'Действие'],
 

        ],
    ]); ?>
        </div>

    </div>
</div>
