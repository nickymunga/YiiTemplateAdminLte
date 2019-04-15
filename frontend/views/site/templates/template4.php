<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\Menu;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="template">
    <div class ="body-content">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 border-green">

                <div class="box box-v2">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-12 align-center">
                                <h5>TITLE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2 align-left">
                                SR..NO.
                            </div>
                            <div class="col-md-2 align-center">
                                GROUP
                            </div>
                            <div class="col-md-2 align-center">
                                CATEGORY
                            </div>
                            <div class="col-md-2 align-center">
                                TYPE
                            </div>
                            <div class="col-md-4 align-center">
                                TITLE
                            </div>
                        </div>
                      <?php foreach (range(1, 10) as $row):?> 
                        <div class="row">
                            <div class="col-md-4 align-left">
                                I.
                            </div>
                            <div class="col-md-4 align-center">
                                
                            </div>
                            <div class="col-md-4 align-center">
                                
                            </div>
                        </div>
                     <?php endforeach;?>  
                    </div>

                </div>
            </div>
        
        </div>
    </div>
</div>
