<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsShow */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="posts-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php if(Yii::$app->user->isGuest){
//    $check_user = Yii::$app->user->isGuest;
//var_dump($check_user);

        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'title',
                'author',
                'description',
                [
                    'attribute' => 'category_id',
                    'format'=>'raw',
                    'value' => function($model){
                        if($model->category){
                            return Html::a($model->category->category_name, ['category/view', 'id' => $model->category->id]);
                        }else{
                            return '';
                        }
                    }
                ],
                ['class' => 'yii\grid\ActionColumn', 'template'=>'{view}'],
            ],
        ]);
    }else{
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'title',
                'author',
                'description',
                [
                    'attribute' => 'category_id',
                    'format'=>'raw',
                    'value' => function($model){
                        if($model->category){
                            return Html::a($model->category->category_name, ['category/view', 'id' => $model->category->id]);
                        }else{
                            return '';
                        }
                    }
                ],
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    }
    ?>
</div>
