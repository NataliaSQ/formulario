<?php
class Database
{
    public $host = `localhost`; //servidor
    public $user = `root`; // usuario de phpMyadmin
    public $pass = ``; // contraseña de phpMyadmin
    public $db = `ShedulePatients`; // base de datos
    private $conn;

    /*metodo constructor, este metodo sera el primero que se ejecute al momento de llamar la clase Database */


    function _construct()
    {
        $this->conn = $this->connectToDatabase(); //hacemos un llamado a la funcion connectToDatabase()
        return $this->conn; // retornanos la conexion
    }

    /* funciopn que permitira conectarnos a nuestra base de datos
    @return $conn ->conexion a la DB
     */

     function connectToDatabase()
     {
        //utilizamos el mysql para interactuar con nuestra base de datos.
        // con el metodo mysqli_connect() vamos a generar la conexion con la base de datos.
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        //validamos si existe algun error de conexion con el metodo mysqli_connect_error();
        if (mysqli_connect_error()) {
            echo "tenemos un error de coneccion" . mysquli_connect_error(); // mostramos el error de conexion.
        }
        return $sconn;
     }
}