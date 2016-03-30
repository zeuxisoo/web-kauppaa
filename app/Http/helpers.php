<?php
function status($name) {
    $status = [
        'waiting'   => trans('helpers.status.waiting'),
        'reviewing' => trans('helpers.status.reviewing'),
        'published' => trans('helpers.status.published'),
        'matched'   => trans('helpers.status.matched'),
        'approved'  => trans('helpers.status.approved'),
        'completed' => trans('helpers.status.complete')
    ];

    return $status[$name];
}

function gender($code) {
    return $code === 1 ? trans('helpers.gender.male') : trans('helpers.gender.female');
}

function occupation($code) {
    $names = [
        1 => 'Teacher',
        2 => 'Designer',
        3 => 'Sale',
        4 => 'Clerk'
    ];

    if (array_key_exists($code, $names) !== true) {
        throw new Exception(trans('helpers.error.mapping_occupation'));
    }else{
        return $names[$code];
    }
}

function yesOrNo($status) {
    return $status == true ? trans('helpers.yes_or_no.yes') : trans('helpers.yes_or_no.no');
}

function loanType($code) {
    $names = [
        1 => 'Type 1',
        2 => 'Type 2',
        3 => 'Type 3',
        4 => 'Type 4'
    ];

    if (array_key_exists($code, $names) !== true) {
        throw new Exception(trans('helpers.error.mapping_loan_type'));
    }else{
        return $names[$code];
    }
}

function payroll($code) {
    $names = [
        1 => trans('helpers.payroll.auto_pay'),
        2 => trans('helpers.payroll.check'),
        3 => trans('helpers.payroll.cash')
    ];

    if (array_key_exists($code, $names) !== true) {
        throw new Exception(trans('helper.error.mapping_payroll'));
    }else{
        return $names[$code];
    }
}

function homePage() {
    $user  = \Auth::user();
    $route = '';

    if ($user === null) {
        $route = 'web.home.index';
    }else{
        if ($user->hasRole('user') === true) {
            $route = 'web.user.home.index';
        }else if ($user->hasRole('financier') === true) {
            $route = 'web.financier.home.index';
        }else if ($user->hasRole('admin') === true) {
            $route = 'web.admin.dashboard.index';
        }else{
            $route = 'web.home.index';
        }
    }

    return $route;
}
