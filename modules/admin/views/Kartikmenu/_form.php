<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kartikmenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kartikmenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'root')->textInput() ?>

    <?= $form->field($model, 'lft')->textInput() ?>

    <?= $form->field($model, 'rgt')->textInput() ?>

    <?= $form->field($model, 'lvl')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon_type')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'selected')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'readonly')->textInput() ?>

    <?= $form->field($model, 'visible')->textInput() ?>

    <?= $form->field($model, 'collapsed')->textInput() ?>

    <?= $form->field($model, 'movable_u')->textInput() ?>

    <?= $form->field($model, 'movable_d')->textInput() ?>

    <?= $form->field($model, 'movable_l')->textInput() ?>

    <?= $form->field($model, 'movable_r')->textInput() ?>

    <?= $form->field($model, 'removable')->textInput() ?>

    <?= $form->field($model, 'removable_all')->textInput() ?>

    <?= $form->field($model, 'child_allowed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
