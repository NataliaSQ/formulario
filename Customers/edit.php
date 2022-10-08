<?php
include(`../config/confing.php`);
include(`Customers.php`);
$p = new Customers();
$data = mysqli_fetch_object($p->getOne($_GET[`id`]));
$date = new DateTime($data->sessionDate);

if (isset($_POST) && !empty($_POST)) {
    $_POST[`image`] = $data->image;
    if ($_FILES[`image`][`name`] !-- ``){
        $_POST[`image`] = saveImage($_FILES);
    }
    $update = $p->update($_POST);
if ($update) {
    $error = `<div class="alert alert-success" role="alert">Cliente modificado correctamente</div>`;
}else{
    $error = `<div class="alert alert-danger" role="alert" > Error al modificar al cliente </div>`; 
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar Cliente</title>

</head>

<body>
    <?php include(`../menu.php`) ?>
    <div class="container">
        <?php 
        if (isset($error)) {
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5"> Modificar Cliente </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="firstName" id="firstName" placeholder="Nombre Cliente" requiere class="form-control" value="<?= $data->firstName ?>"/>
                    <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
                </div>
                <div class="col">
                <input type="text" name="lasttName" id="lastName" placeholder="Apellido Cliente" requiere class="form-control" value="<?= $data->lastName ?>"/>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email Cliente" requiere class="form-control" value="<?= $data->email ?>"/>
                    </div>
                <div class="col">
                <input type="number" name="phone" id="phone" placeholder="Numero celular Cliente" requiere class="form-control" value="<?= $data->phone ?>"/>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <textarea name="diseases" id="diseases" placeholder="servicio 1, servicio 2, ..." requiere class="form-control"><?= $data->firstName ?> </textarea>
                    <b>Debes separar los servicios con una coma</b>
                    </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="datetime-local" name="sessionDate" id="sessionDate" requiere class="form-control" value="<?= $date->format(`Y-m-d\TH:i`) ?>"/>
                    </div>
                <div class="col">
                <input type="text" name="duration" id="duration" placeholder="Duración de la sesión" requiere class="form-control" value="<?= $data->duration ?>"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="file" name="image" id="image" class="form-control" />
                </div>
            </div>

            <button class="btn btn-sucess">Modificar</button>
        </form>
    </div>
</body>

</html>