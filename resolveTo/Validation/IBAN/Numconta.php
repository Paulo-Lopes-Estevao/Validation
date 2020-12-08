<?php

namespace Build\Validation\IBAN;

use Build\Validation\Mode\DataMode;

class Numconta extends DataMode
{

    private $codeiban;

    private function Method(): void
    {
        $this->setData($_POST);
    }

    public function validarIBAN()
    {
        $this->Method();

        $pattern = '/^AO06[.]00(06|10|60|44|05|55|40|51|04)[.][0]{4}[.][0]{8}[.][0]{2}[.][0]{2}[.][0]{1}$/';
        $iban = $this->getiban() ?? "";
        if (preg_match($pattern, $iban)) {
            return $this->codeiban = $iban;
        }
        return false;
    }

    public function verifyBank()
    {
        $iban = $this->codeiban;

        $split = explode(".", $iban);

        $spban = $split[1]??"";

        switch ($spban) {
            case '0006':
                return "BFA";
                break;
            case '0010':
                return "BPC";
                break;
            case '0060':
                return "SBA";
                break;
            case '0044':
                return "SOL";
                break;
            case '0005':
                return "BCI";
                break;
            case '0055':
                return "BMA";
                break;
            case '0040':
                return "BAI";
                break;
            case '0051':
                return "BIC";
                break;
            case '0004':
                return "BCGA";
                break;

            default:
                return "Não pertence a nenhum banco";
                break;
        }



    }
}
