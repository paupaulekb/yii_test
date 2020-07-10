<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */
/* @var $form ActiveForm */
?>
<div class="site-formSearch">

    <?php $form = ActiveForm::begin(); ?>

    
        <div class="form-group">
            <?= Html::input("text","search_phone");?>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-formSearch -->
