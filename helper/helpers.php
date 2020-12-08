<?php

if (!function_exists('bi')) {
    function bi(string $bi)
    {
        
        $pattern = '/^(\d){9}[A-Z]{2}(\d){3}$/';
            if(preg_match($pattern,$bi)){
                return $bi;
            }
            return false;
    }
}

if (!function_exists('iban')) {
    function iban(string $iban)
    {
        
        $pattern = '/^AO06[.]00(06|10|60|44|05|55|40|51|04)[.][0]{4}[.][0]{8}[.][0]{2}[.][0]{2}[.][0]{1}$/'; 
        if (preg_match($pattern, $iban)) {
            return $iban;
        }
        return false;
    }
}