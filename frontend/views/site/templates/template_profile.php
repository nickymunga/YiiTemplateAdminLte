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
                
                <div class="col-md-9 border-green">
                    <div class="row">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-12 align-center">
                                        <h3>Profile</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-5 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 profile-image">
                                            <?=\yii\helpers\Html::img('@web/images/profile.png', ['class' => 'profile-pic'])?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 profile-description align-center" style="padding-top: 50px;">
                                            Maybe Subscription Details here? 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xs-12 profile-detail">
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">First Name</div>
                                        <div class="col-md-8 profile-detail-text">Nicky</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">Last Name</div>
                                        <div class="col-md-8 profile-detail-text">Kalu</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">Gender</div>
                                        <div class="col-md-8 profile-detail-text">Male</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">DOB</div>
                                        <div class="col-md-8 profile-detail-text">YYYY, month, day</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">Phone 1</div>
                                        <div class="col-md-8 profile-detail-text">(+254) (xx-xxx-xxx)</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">Phone 2</div>
                                        <div class="col-md-8 profile-detail-text">(+254) (xx-xxx-xxx)</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">Mobile 1</div>
                                        <div class="col-md-8 profile-detail-text">(+254) (xx-xxx-xxx)</div>
                                    </div>
                                    
                                    <div class="row profile-detail-section">
                                        <div class="col-md-4 profile-detail-label">Mobile 2</div>
                                        <div class="col-md-8 profile-detail-text">(+254) (xx-xxx-xxx)</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-3" style="padding-top: 30px;">
                                    <button class="btn bg-olive btn-flat btn-block">Update Profile</button>
                                </div>
                                
                            </div>
                        </div>
                    
                </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
