<?php
include(`../config/config.php`);
include(`Customers.php`);

if (isset($POST) && !empty($_POST)) {
    $customers = new Patient();

    if ($FILES[`image`][`name`] !-- ``) {
        $POST[`image`] = saveImage($FILES);
    }

    $save = $patient-> save($_POST);
    if ($save){
        $error = `<div class="alert alert-success" role="alert">Cliente creado correctamente</div>`;
    }else{
        $error = `<div class="alert alert-danger" role="alert" > Error al crear un cliente </div>`;
    }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Crear paciente </title>
    <link rel="stylesheet" href="" integrity="">
</head>

<body>
<?php include(`../menu.php`) ?>
    <div class="container"></div>
</html>

</body>
