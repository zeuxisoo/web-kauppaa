<?php
return [
    'home' => [
        'title'    => 'Dashboard',
        'welcome'  => 'Welcome!',
        'shortcut' => [
            'panel_heading' => 'Shortcut',
            'applies' => [
                'manage' => ':status'
            ]
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
            ],

            'contact_us' => [
                'title'         => 'Edit Contact Us',
                'panel_heading' => 'Contact Us',
                'label'         => [
                    'description' => 'Description',
                ],
                'save_button'   => 'Save',

                'success' => [
                    'about_us_updated' => 'Contact us updated'
                ]
            ]
        ]
    ],

    'apply' => [
        'manage' => [
            'title'         => 'Manage applies (:status)',
            'panel_heading' => 'Applies',
            'alert_empty'   => 'No any related applications',
            'label'         => [
                'chinese_name' => 'Chinese name',
                'english_name' => 'English name',
                'apply_amount' => 'Apply amount',
                'created_at'   => 'Created at',
                'status'       => 'Status',
                'action'       => 'Action',
            ],
            'row'           => [
                'view' => 'View',
                'edit' => 'Edit',
            ]
        ],

        'show' => [
            'title' => 'Show apply',
            'section' => [
                'personal'           => 'Personal',
                'property_ownership' => 'Property Ownership',
                'loan'               => 'Loan',
                'others'             => 'Others',
                'upload'             => 'Upload',
            ],
            'label' => [
                'status'             => 'Status',
                'chinese_name'       => 'Chinese name',
                'english_name'       => 'English name',
                'hkid'               => 'HKID',
                'gender'             => 'Gender',
                'occupation'         => 'Occupation',
                'monthly_income'     => 'Monthly Income',
                'property_ownership' => 'Property Ownership',
                'loan_type'          => 'Loan Type',
                'apply_amount'       => 'Apply Amount',
                'loan_period'        => 'Loan Period',
                'payroll'            => 'Payroll',
                'mpf'                => 'MPF',
                'once_bankruptcy'    => 'Once bankruptcy',

                'private_residential'   => 'Private residential',
                'home_ownership'        => 'Home ownership',
                'public_home_ownership' => 'Public home ownership',
                'village_houses'        => 'Village houses',
                'no_property'           => 'No property',
            ],
        ],

        'edit' => [
            'title' => 'Edit apply'
        ]
    ]
];
