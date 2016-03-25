<?php
function status($code) {
    return ucfirst($code);
}

function gender($code) {
    return $code === 1 ? "Male" : "Female";
}

function occupation($code) {
    $names = [
        1 => 'Teacher',
        2 => 'Designer',
        3 => 'Sale',
        4 => 'Clerk'
    ];

    if (array_key_exists($code, $names) !== true) {
        throw new Exception('Can not map the occupation code to text');
    }else{
        return $names[$code];
    }
}

function yesOrNo($status) {
    return $status === true ? "Yes" : "No";
}

function loanType($code) {
    $names = [
        1 => 'Type 1',
        2 => 'Type 2',
        3 => 'Type 3',
        4 => 'Type 4'
    ];

    if (array_key_exists($code, $names) !== true) {
        throw new Exception('Can not map the loan type code to text');
    }else{
        return $names[$code];
    }
}

function payroll($code) {
    $names = [
        1 => 'Auto pay',
        2 => 'Check',
        3 => 'Cash',
    ];

    if (array_key_exists($code, $names) !== true) {
        throw new Exception('Can not map the payroll code to text');
    }else{
        return $names[$code];
    }
}

function homePage() {
    $user  = \Auth::user();
    $route = '';

    if ($user->hasRole('user') === true) {
        $route = 'web.user.home.index';
    }else if ($user->hasRole('financier') === true) {
        $route = 'web.financier.home.index';
    }else{
        $route = 'web.home.index';
    }

    return $route;
}
