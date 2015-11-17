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

    
   
   <div class="container">
   	<div class="row">
   		<div class="col-md-8">
   			<p><?php echo $post->title; ?> </br> </br> 
		    <p><?php echo $post->Description; ?> </br> </br>
	   	    <p><?php echo $post->date; ?></br> </br>
   		</div>
   		<div class="col-md-4"></div>
   	</div>
   </div>
   
        

</div>
