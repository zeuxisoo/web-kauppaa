<?php
return [
    'application' => [
        'index' => [
            'title'       => 'All Published',
            'alert_empty' => 'No any related application',
            'table'       => [
                'menu' => [
                    'chinese_name'   => 'Chinese name',
                    'english_name'   => 'English name',
                    'gender'         => 'Gender',
                    'occupation'     => 'Occupation',
                    'monthly_income' => 'Monthly Income',
                    'apply_amount'   => 'Apply amount',
                    'created_at'     => 'Created at',
                    'status'         => 'Status',
                    'action'         => 'Action'
                ],
                'row' => [
                    'view_button' => 'View',
                ]
            ]
        ],

        'show' => [
            'section' => [
                'action'             => 'Action',
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
            'back_button'       => 'Back',
            'investment_button' => 'Investment'
        ],

        'investment' => [
            'error' => [
                'apply_already_matched' => 'This application already matched',
            ],

            'success' => [
                'apply_matched' => 'You was matched on this apply',
            ]
        ]
    ]
];
