<?php
require_once("../../../vendor/autoload.php");
use Build\Validation\BI\Identity;
$return = new Identity();
echo $return->validarBI();

?>

<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation BI</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="">
                <input type="text" name="bi" placeholder="digite nº BI" id="">
            </label>
        </div> 
        <button> verificar </button>
    </form>
</body>

</html>