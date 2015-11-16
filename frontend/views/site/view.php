<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\models\Posts;


/* @var $this yii\web\View */
/* @var $model backend\models\Posts */

$this->title = $post->title;
$this->params['breadcrumbs'][] = ['label' => 'Заметки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>
   
   <!--<?php echo $post->id; ?> </br> -->
   <p><?php echo $post->title; ?> </br> </p> 
   <!--<p><?php echo $post->small_description; ?> </br> </p> -->
   <p><?php echo $post->Description; ?> </br> </p>
   <p><?php echo $post->date; ?></br> </p>
        

</div>
