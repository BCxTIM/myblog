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
        <hr />
        <table class="table table-striped table-hover">

            <?php foreach ($data as $post): ?>
            <tr>
                <td><?php echo Html::a($post->title, array('site/view', 'id'=>$post->id)) ?></td>
                <td><?php echo $post->small_description; ?></td>
                <td><?php echo $post->date; ?></td>
            
            
             </tr>
            <?php endforeach; ?>
        </table>
        </div>  

    </div>
</div>
