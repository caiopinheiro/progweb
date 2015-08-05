<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin([
                'method'=>'get',
                'action'=>['aluno/turma']]); ?>

    <div class="form-group">
        <label>Digite o ano desejado: </label>
        <?= Html::input('text', 'ano'); ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
