<?php
return [
    'home' => [
        'title'    => 'Dashboard',
        'welcome'  => 'Welcome!',
        'shortcut' => [
            'panel_heading' => 'Shortcut'
        ]
    ],

    'news' => [
        'create' => [
            'title'         => 'Create News',
            'panel_heading' => 'News',
            'label'         => [
                'title'   => 'Title',
                'summary' => 'Summary',
                'content' => 'Content'
            ],
            'save_button'   => 'Save',

            'success' => [
                'news_created' => 'News created',
            ]
        ],

        'manage' => [
            'title'         => 'Manage News',
            'panel_heading' => 'News',
            'label'         => [
                'title'      => 'Title',
                'created_at' => 'Created at',
                'control'    => 'Control',
            ],
            'row'           => [
                'edit' => 'Edit'
            ],
            'delete_button' => 'Delete'
        ],

        'edit' => [
            'title'         => 'Edit News',
            'panel_heading' => 'News',
            'label'         => [
                'title'   => 'Title',
                'summary' => 'Summary',
                'content' => 'Content'
            ],
            'save_button'   => 'Save',

            'success' => [
                'news_updated' => 'News updated',
            ]
        ],

        'destory' => [
            'success' => [
                'news_deleted' => 'News deleted',
            ]
        ]
    ],

    'site' => [
        'edit' => [
            'about_us' => [
                'title'         => 'Edit About Us',
                'panel_heading' => 'About Us',
                'label'         => [
                    'description' => 'Description',
                ],
                'save_button'   => 'Save',

                'success' => [
                    'about_us_updated' => 'About us updated'
                ]
            ]
        ]
    ]
];
