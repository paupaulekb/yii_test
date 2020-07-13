<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php  echo \Yii::$app->view->renderFile('@app/views/site/formSearch.php');?>

    <p>
        <?= Html::a('Create Phones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php if($dataProvider){
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

//                'id',
                'phone',
                'user_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); 
    }?>


</div>
