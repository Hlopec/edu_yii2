<?php

use yii\helpers\Html;
use yii\web\View;
use yii\BaseYii;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */


    if(Yii::$app->user->isGuest){
        return Yii::$app->getResponse()->redirect(['//site/login']);
    }else{

        $this->title = 'Update Posts: ' . $model->title;
        $this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
        $this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
        $this->params['breadcrumbs'][] = 'Update';
    ?>
<div class="posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?

        echo $this->render('_form', [
            'model' => $model,
        ]);
    }
    ?>

</div>
