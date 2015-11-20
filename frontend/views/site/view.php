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
   	<div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2> <?php echo Html::a($post->title, array('site/view', 'id'=>$post->id)) ?></h2>
                <p class="blog-post-meta"><?php echo $post->date; ?></p>
                <?= Html::img($post->img_post, ['alt' => $post->title]) ?>
                <br><br>
                <p><?php echo $post->small_description; ?></p>
            </div><!-- /.blog-post -->
        
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4><?= Yii::t('app', 'NAV_ABOUT'); ?></h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="sidebar-module">
                <h4><?= Yii::t('app', 'NAV_CONTACT') ?></h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

   	</div>
</div>
   
        

</div>
