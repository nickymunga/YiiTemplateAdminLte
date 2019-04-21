<div class="template">
    <div class ="body-content">
        <div class="col-md-12">
            <div class="row">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <div class="box-title">Personal Details</div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="col-md-4 col-xs-12">
                                <div class="profile-preview">
                                    <?=\yii\helpers\Html::img('@web/images/profile.png', ['class' => 'profile-update-pic'])?>
                                </div>
                                <div class="form-group">
                                    <input type="file" id="exampleInputFile">
                                  </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                
                                <div class="form-group">
                                    <label>DOB:</label>

                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control" data-inputmask="'alias': 'YYY/mm/DD'" data-mask>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alt Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Alt email">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label><br>
                                    <div class="btn-group" data-toggle="buttons">

                                            <label class="btn btn-default">
                                                    <input type="radio" name="options" id="option2" autocomplete="off" chacked>
                                                    <span class="fa fa-male"> Male</span>
                                            </label>

                                            <label class="btn btn-default">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <span class="fa fa-female"> Female</span>
                                            </label>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="row">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <div class="box-title">Professional Details</div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Type</label><br>
                                    <div class="btn-group" data-toggle="buttons">

                                            <label class="btn btn-default">
                                                    <input type="radio" name="options" id="option2" autocomplete="off" chacked>
                                                    <span class="fa fa-user"> Individual</span>
                                            </label>

                                            <label class="btn btn-default">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <span class="fa fa-building"> Corporate</span>
                                            </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bar Reg No</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grad Yr</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gst No</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profession</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Practice Since</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No of Lawyers</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Practice Area</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pan No</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="row">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <div class="box-title">Contact Details</div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country Code</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Landline 1</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile 2</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">State Code</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pin Code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="l">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Landline 2</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City Code</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fax</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="l">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile 1</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </div>
    </div>
</div>
