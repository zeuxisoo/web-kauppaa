<?php
return [
    'index' => [
        'title' => [
            'base_information' => 'Base information',
            'apply_information' => 'Apply information',
        ],
        'label' => [
            'username'           => 'Username',
            'email'              => 'Email',
            'created_at'         => 'Created at',
            'total_apply_amount' => 'Total apply count',
        ]
    ],

    'edit_profile' => [
        'title' => 'Edit Profile',
        'label' => [
            'username' => 'Username',
            'email'    => 'Email',
        ],
        'help_text' => [
            'username' => 'Current is <strong>:username</strong>, Please keep it blank if you don\'t want to change it.',
            'email'    => 'Current is <strong>:email</strong>, Please keep it blank if you don\'t want to change it.',
        ],
        'update_button' => 'Update',

        'success' => [
            'profile_updated' => 'Profile updated'
        ]
    ],

    'edit_password' => [
        'title' => 'Edit Password',
        'label' => [
            'old_password'     => 'Old password',
            'new_password'     => 'New password',
            'confirm_password' => 'Confirm password',
        ],
        'update_button' => 'Update',

        'error' => [
            'old_password_not_match' => 'The old password does not match',
        ],

        'success' => [
            'password_updated' => 'Password updated',
        ]
    ]
];
