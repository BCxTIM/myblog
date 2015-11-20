<?php
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Posts;
use yii\helpers\Url;
use yii\assets\assets;


/* @var $this yii\web\View */

$this->title = Yii::$app->name;

?>


<div class="site-index">

    <div class="jumbotron">
         <h1> Мой блог </h1>
    </div>
    

    <div class="body-content">

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                           
                            <div class="row masonry" data-columns>
                                 <?php foreach ($data as $post): ?>
                                <div class="item"> 
                                     <div class="thumbnail">
                                        
                                     
                                        
                                        <?= Html::a(Html::img($post->img_post, ['alt' => $post->title]), array('site/view', 'id'=>$post->id)) ?>
                                        <div class="caption">
                                            <h3> <?php echo Html::a($post->title, array('site/view', 'id'=>$post->id)) ?></h3>
                                            <p><?php echo $post->small_description; ?> </p>
                                            <p><?php echo $post->date; ?> </p>
                                             <?= Html::a('Подробнее <i class="glyphicon glyphicon-arrow-right"></i>', array('site/view', 'id'=>$post->id), ['class'=>'btn btn-success']) ?>
                                             
                                        </div>
                                    </div>
                                </div>

     
            
            
             
            <?php endforeach; ?>
                            </div>
                        </div>
        
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        <hr />
        
        </div>  

    </div>
</div>
