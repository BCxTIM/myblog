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
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

            <?php foreach ($data as $post): ?>
           
                <?php echo Html::a($post->title, array('site/view', 'id'=>$post->id)) ?> </br></br>
                <?php echo $post->small_description; ?> </br></br>
                <?php echo $post->date; ?> </br></br></br></br>   
            
            
             
            <?php endforeach; ?>
        </table>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        <hr />
        
        </div>  

    </div>
</div>
