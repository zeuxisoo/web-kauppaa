<?php
return [
    'home' => [
        'index' => [
            'applications' => [
                'title'       => 'Applications',
                'alert_empty' => 'No any submitted application',
                'ref_code'    => 'Ref code: :code',
                'status'      => 'submitted at :created_at, status is <strong>:status</strong>',
                'view_button' => 'View'
            ]
        ]
    ],

    'apply' => [
        'index' => [
            'title'       => 'My List',
            'apply_it'    => 'Apply it',
            'alert_empty' => 'No any submitted application',
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

        'create' => [
            'title' => 'Application Form',
            'part' => [
                'one'   => 'Part 1',
                'two'   => 'Part 2',
                'three' => 'Part 3',
                'four'  => 'Part 4',
            ],
            'label' => [
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
                'upload_hkid'        => 'Upload HKID',
                'upload_address'     => 'Upload Address',
                'upload_income'      => 'Upload Income',
            ],
            'options' => [
                'gender' => [
                    'male'   => 'Male',
                    'female' => 'Female'
                ],
                'occupation' => [
                    'teacher'  => 'Teacher',
                    'designer' => 'Designer',
                    'sale'     => 'Sale',
                    'clerk'    => 'Clerk',
                ],
                'property_ownership' => [
                    'private_residential'   => 'Private residential',
                    'home_ownership'        => 'Home ownership',
                    'public_home_ownership' => 'Public home ownership',
                    'village_houses'        => 'Village houses',
                    'no_property'           => 'No property',
                ],
                'loan_type' => [
                    'one'   => 'Type 1',
                    'two'   => 'Type 2',
                    'three' => 'Type 3',
                    'four'  => 'Type 4'
                ],
                'payroll' => [
                    'auto_pay' => 'Auto pay',
                    'check'    => 'Check',
                    'cash'     => 'Cash',
                ],
                'mpf' => [
                    'yes' => 'Yes',
                    'no'  => 'No',
                ],
                'once_bankruptcy' => [
                    'yes' => 'Yes',
                    'no'  => 'No'
                ]
            ],
            'browser_button' => 'Browse',
            'submit_button'  => 'Submit',

            'error' => [
                'at_least_one_property_ownership' => 'Please select at least one property ownership (code: :code)'
            ],

            'success' => [
                'application_submitted' => 'Application submitted',
            ]
        ],

        'show' => [
            'title' => [
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

            'error' => [
                'not_found_records' => 'Can not find related records',
            ]
        ]
    ],
];
