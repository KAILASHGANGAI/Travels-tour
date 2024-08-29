<?php

use Illuminate\Support\Facades\Auth;
use Wavey\Sweetalert\Sweetalert;

//getcustomer user details 
if (!function_exists('getCustomerUser')) {
    function getCustomerUser()
    {
        return Auth::guard('customer')->user();
    }
}
// success toast message 
if (!function_exists('successMessage')) {
    function successMessage($message)
    {
        
        Sweetalert::success('description', $message);
    }
}

// error toast message
if (!function_exists('errorMessage')) {
    function errorMessage($message) {
        Sweetalert::error('description', $message);
    }
}
