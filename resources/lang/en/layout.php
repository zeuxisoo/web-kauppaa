<?php
return [
    'frontend' => [
        'toggle_navigation' => 'Toggle navigation',
        'navbar' => [
            'home'        => 'Home',
            'apply'       => 'Apply',
            'signout'     => 'Sign out',
            'signin'      => 'Sign in',
            'signup'      => 'Sign up',
            'about'       => 'About Us',
            'application' => 'Application'
        ],
        'alert' => [
            'error_title'   => 'Error!',
            'success_title' => 'Success!'
        ]
    ],

    'backend' => [
        'toggle_navigation' => 'Toggle navigation',
        'navbar' => [
            'dashboard' => 'Dashboard',
            'home'      => 'Home',
            'signout'   => 'Sign out',
        ],
        'alert' => [
            'error_title'   => 'Error!',
            'success_title' => 'Success!'
        ]
    ],

    'frontend_profile' => [
        'menu' => [
            'title'         => 'Menu',
            'my_profile'    => 'My Profile',
            'edit_profile'  => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ]
    ],

    'frontend_financier_application' => [
        'title' => 'Applies List',
        'menu'  => [
            'title' => 'Menu',
            'page'  => [
                'all_published' => 'All Published',
                'my_matched'    => 'My Matched',
                'my_approved'   => 'My Approved'
            ],
        ]
    ],

    'backend_dashboard' => [
        'menu' => [
            'welcome' => 'Welcome, :username',
            'site'    => [
                'group_name'      => 'Site',
                'edit_about_us'   => 'Edit About Us',
                'edit_contact_us' => 'Edit Contact Us',
            ],
            'news'    => [
                'group_name'  => 'News',
                'create_news' => 'Create news',
                'manage_news' => 'Manage news',
            ],
            'apply'   => [
                'group_name'   => 'Applies',
                'manage_apply' => 'Manage :status applies',
            ],
            'other'   => [
                'group_name' => 'Others'
            ]
        ]
    ]
];
