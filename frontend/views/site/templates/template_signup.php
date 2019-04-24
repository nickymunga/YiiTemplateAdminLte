<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'SIGN UP';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template">
    <div class ="body-content ">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <div class="row">
                <h3 class="box-title align-center"><?= Html::encode($this->title) ?></h3>
                
            </div>
            <?php $form=ActiveForm::begin([
                    'enableAjaxValidation'   => false,
                    'enableClientValidation' => false,
                    'layout' => 'horizontal', 
                    'fieldConfig' => [
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                    'horizontalCssClasses' => [
                        'label' => 'col-sm-3',
                        'wrapper' => 'col-sm-9',
                        'error' => '',
                        'hint' => '',
                    ],
                ], 'options' => ['enctype'=>'multipart/form-data'],]);?>
            <div class="row">
                <div class="box box-v3">
            <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <?= $form->field($model, 'email')->textInput(['style'=>'width:300px']) ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $form->field($model, 'email')->textInput(['style'=>'width:300px']) ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $form->field($model, 'password')->passwordInput(['style'=>'width:300px']) ?>
                            </div>
                            
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label signup-label">PASSWORD REP</label>

                              <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label signup-label">VERIFY CODE</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                    <button type="submit" class="btn btn-flat theme-blue-button">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


