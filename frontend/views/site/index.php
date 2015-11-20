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
    <div class="container">

   <div class="blog-header">
        <h1 class="blog-title"><?= Yii::$app->name; ?></h1>
        <p class="lead blog-description">Практика автоматизации</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
            <?php foreach ($data as $post): ?>
                <h2> <?php echo Html::a($post->title, array('site/view', 'id'=>$post->id)) ?></h2>
                <p class="blog-post-meta"> <i class="glyphicon glyphicon-time"></i> Posted on <?php echo date('d F Y H:i:s', strtotime($post->date)) ?></p>
                <?= Html::a(Html::img($post->img_post, ['alt' => $post->title]), array('site/view', 'id'=>$post->id)) ?>
                <br><br>
                <p><?php echo $post->small_description; ?></p>
                <?= Html::a('Подробнее <i class="glyphicon glyphicon-arrow-right"></i>', array('site/view', 'id'=>$post->id), ['class'=>'btn btn-info']) ?>
                <?php endforeach; ?>
            </div><!-- /.blog-post -->
            

            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        
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

    </div><!-- /.row -->

    </div>





<hr />
</div>  

</div>
</div>
