<?php

if (!function_exists('iban')) {
    function iban(string $iban)
    {
        
        $pattern = '/^(\d){9}[A-Z]{2}(\d){3}$/';
            if(preg_match($pattern,$iban)){
                return $iban;
            }
            return false;
    }
}
