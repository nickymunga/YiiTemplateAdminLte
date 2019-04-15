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
                <div class="col-md-3 col-sm-12 border-green">

                </div>
                <div class="col-md-9 col-sm-12 border-green">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form">
                                <div class="col-md-2 col-xs-12">
                                    <button type="submit" class="btn btn-flat bg-olive btn-block">SEARCH</button>                                
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="search" class="form-control" id="exampleInputEmail1" placeholder="MURDER">
                                      </div>
                                </div>   
                            </form>
                            
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">SORT SEARCH RESULT</option>
                                      <option>OPTION 1</option>
                                      <option>OPTION 2</option>
                                      <option>OPTION 3</option>
                                    </select>
                                  </div>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 align-left">
                            <span><i class="glyphicon glyphicon-unchecked"></i> .............................</span>
                        </div>
                        <div class="col-md-3 align-left">
                            <span><i class="glyphicon glyphicon-unchecked"></i> .............................</span>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            .................................................................................................................
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3 border-green side-menu">
                    <?php
                        echo Menu::widget([
                            'items' => [
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item active'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                                [
                                    'label' => 'INDIAN COURT (....)',
                                    'url' => ['#'],
                                    'options'=>['class'=>'dropdown side-menu-item'],
                                    'template' => '<a href="{url}" class="href_class">{label}</a>',
                                    'items' => [
                                        ['label' => 'CENTRAL ACT N (....)', 'url' => ['#']],
                                        ['label' => 'DESCRIPTION (...)', 'url' => ['#']],
                                    ]
                                ],
                            ],
                            'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
                            'options' =>[
                                'class' => 'nav-side-menu'
                            ]
                        ]);
                    ?>
                </div>
                <div class="col-md-9 border-green">
                    <!-- Search Results-->
                    <?php foreach (range(1, 3) as $row):?>
                        <div class="box box-v2">
                            <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-8 align-left">
                                        <h5>TITLE GOES HERE</h5>
                                    </div>
                                    <div class="col-md-4 align-center">
                                        <h5>2019 - May 05</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                It was popularised in the 1960s with the release of Letraset sheets containing 
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="row magintop">
                                    <div class="col-md-3">
                                        COURT NAME
                                    </div>
                                    <div class="col-md-3">
                                        ACTS
                                    </div>
                                    <div class="col-md-3">
                                        CITED BY
                                    </div>
                                    <div class="col-md-3">
                                        CITED
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
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
