<div class="template">
    <div class ="body-content">
        <div class="col-md-12">
            <div class="row">
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
                        <div class="box box-v2">
                            <div class="box-body">
                                <div id="exTab2" class="tab-container">	
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                          <a  href="#1" data-toggle="tab">INDIVIDUAL</a>
                                        </li>
                                        <li><a href="#2" data-toggle="tab">CORPORATE</a>
                                        </li>
                                        <li><a href="#3" data-toggle="tab">FULL ACCESS</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content ">
                                        <div class="tab-pane active" id="1">
                                            <?=$this->render('partials/plan')?>
                                        </div>
                                        <div class="tab-pane" id="2">
                                          <?=$this->render('partials/plan')?>
                                        </div>
                                        <div class="tab-pane" id="3">
                                          <?=$this->render('partials/plan')?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

