<?php
    echo \yii\widgets\Menu::widget([
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