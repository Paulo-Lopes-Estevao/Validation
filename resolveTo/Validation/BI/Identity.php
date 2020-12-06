<?php

namespace Build\Validation\BI;

use Build\Validation\Mode\DataMode;

class Identity extends DataMode
{

    private function Method()
    {
        $this->setData($_POST);
    }

    public function validarIBAN()
    {
        $this->Method();

        $pattern = '/^(\d){9}[A-Z]{2}(\d){3}$/';
        $iban = $this->getbi() ?? "";
        if(preg_match($pattern,$iban)){
            return $iban;
        }
        return false;
    }
}
