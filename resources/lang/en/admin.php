<?php
return [
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
    ]
];
