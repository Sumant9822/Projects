<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Series;
use yii\helpers\ArrayHelper;

?>

<h2 class="page-head"> Add New Game </h2>
<br>
<div class="game-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($games, 'gseries')->dropDownList(
            Series::find()
            ->select(['name','id'])
            ->indexBy('id')
            ->column(),['prompt' => 'Select Game Series']
        );?>

        <?= $form->field($games, 'gname') ?>
        <?= $form->field($games, 'gspace') ?>
        <?= $form->field($games, 'gdeveloper') ?>
        <?= $form->field($games, 'gpublisher') ?>
        <?= $form->field($games, 'ggenres')->dropDownList(
            ['Adventure Game' => 'Adventure Game',
            'Shooter Game' => 'Shooter Game',
            'Virtual reality' => 'Virtual reality',],
            ['prompt' => 'Select Genres']
        );  ?>
        
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
