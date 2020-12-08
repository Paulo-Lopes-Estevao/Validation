<?php
require_once("../../../vendor/autoload.php");
use Build\Validation\IBAN\Numconta;
$return = new Numconta();
echo $return->validarIBAN()!="" ? $return->validarIBAN()."<br>".$return->verifyBank(): "";

?>

<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation IBAN</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="">
                <input type="text" name="iban" placeholder="digite nº IBAN" id="">
            </label>
        </div> 
        <button> verificar </button>
    </form>
</body>

</html>