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
        <div class="col-md-12">
            <div class="row">
                 <!--SideBar Menu-->
                <div class="col-md-3 border-green side-menu">
                    <div class="row side-menu-content">
                        <div class="box box-v2">   
                            <div class="box-body">
                                <?=$this->render('partials/side_menu.php')?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of SideBar Menu-->
                
                <!--Content Section-->
                <div class="col-md-9 border-green">
                    <div class="row">
                    <div class="box box-v2">
                        <div class="box-header with-border">
                            <div class="row">
                                <div class="col-md-12 align-left">
                                    <h5>.A .B .C</h5>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="search col-md-10 col-md-offset-1">
                                <form role="form">
                                    <div class="col-md-10 col-xs-12">
                                        <div class="form-group">
                                            <input type="search" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        <button type="submit" class="btn btn-flat bg-olive btn-block">SEARCH</button>                                
                                    </div>
                                </form>
                            </div>
                            
                            <div class="search col-md-10 col-md-offset-1">
                                <form role ="form">
                                    <div class="row" style="margin-top: 50px">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="datefrom" class="col-sm-4 control-label">FROM DATE</label>

                                                <div class="col-sm-8">
                                                  <input type="datefrom" class="form-control" id="datefrom" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dateto" class="col-sm-4 control-label">TO DATE</label>

                                                <div class="col-sm-8">
                                                  <input type="dateto" class="form-control" id="dateto" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="box-body align-center col-md-10 col-md-offset-1 footer-block"  style="margin-top: 50px">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,
                                </p>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
</div>
