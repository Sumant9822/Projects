<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="series-create">
<h2 class="page-head"> Add New Game Series </h2>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($series, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>