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
            <div class="col-md-12">
                <div class="col-md-3 border-green side-menu">
                    <?=$this->render('partials/side_menu.php')?>
                </div>
                <div class="col-md-9 border-green">
                    <!-- Search Results-->
                    
                        <div class="box box-v2">
                            <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-12 align-center">
                                        <h5>TITLE</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <?php foreach (range(1, 10) as $row):?> 
                                JUDGEMENT...............................................<BR>
                             <?php endforeach;?>   
                                
                                <div class="row">
                                    <div class="col-md-12 align-center">
                                        <h5>TITLE</h5>
                                        <p style="padding-top: 100px;">CONTENT</p>
                                    </div>
                                </div>
                                
                        </div>
                    
                    
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-left">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
