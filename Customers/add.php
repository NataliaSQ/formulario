<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
    <link rel="" href="" integrity="">

</head>

<body>
    <?php include(`../menu.php`) ?>
    <div class= "container">
        <?php
        if (isset($error)){
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5"> Creación de agenda </h2>
        <form method="POST" enctype="multipart/form-data"> 
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="firstName" id="firstName" placeholder="Nombre cliente" requiere class="form-control" />
                </div>
                <div class="col">
                <input type="text" name="lastName" id="lastName" placeholder="Apellido cliente" requiere class="form-control" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                <input type="email" name="email" id="email" placeholder="Email cliente" requiere class="form-control" />  
                </div> </div>
                <div class="col">
                <input type="number" name="phone" id="phone" placeholder="Número celular cliente" requiere class="form-control" />  
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                <textarea name="services" id="services" placeholder="servicio 1, servicio 2, ..." requiere class="form-control"></textarea>
                <b>Debes separar las enfermedades con una coma</b>  
                </div> 
            </div>

            <div class="row mb-2">
                <div class="col">
                <input type="datetime-local" name="sessionDate" id="sessionDate" requiere class="form-control" />  
                </div> 
                <div class="col">
                <input type="text" name="duration" id="duration" placeholder="Duración de la sesión" requiere class="form-control" />  
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                    <input type="file" name="image" id="image" class="form-control" />
                </div>
            </div>
            
            <button class="btn btn-success"> Registrar </button>
        </form>
    </div>
</body>
</html>