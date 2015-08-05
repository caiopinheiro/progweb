<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Alunos';
?>
<div class="aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'matricula',
            'nome',
            'id_curso',
            'ano_ingresso',
        ],
    ]); ?>

</div>
