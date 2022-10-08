<?php
include(`../config/confing.php`);
include(`../config/Database.php`);

class Customers{
    public $conn;

    function__construct()
    {
        $db = new Databases();
        $this->conn = $db->connectToDatabase();
    }

    function save($params){
        $firstName = $params[`firstName`]
        $firstName = $params[`lastName`]
        $email = $params[`email`]
        $phone = $params[`phone`]
        $services = $params[`services`]
        $sessionDate = $params[`sessionDate`]
        $duration = $params[`duration`]
        $image = $params[`image`]

        $insert = " INSERT INTO Customers Values (NULL, `$firstName`, `$lastName`, `$email`, `$phone`, `services`, `$sessionDate`, `$duration`, `$image`) ";
        return mysquli_query($this->conn, $insert);

    }

    function getALL(){
        $sql = " SELECT * FROM Customers ORDER BY sessionDate ASC ";
        return mysqli_query($this-> conn, $sql);
    }
    function getOne($id){
        $sql = " SELECT * FROM Customers WHERE ID = $id";
        return mysqli_query($this-> conn, $sql);
    }

    function update($params){
        $firstName = $params[`firstName`]
        $firstName = $params[`lastName`]
        $email = $params[`email`]
        $phone = $params[`phone`]
        $services = $params[`services`]
        $sessionDate = $params[`sessionDate`]
        $duration = $params[`duration`]
        $image = $params[`image`]
        $id = $params[`id`]

        $update = "UPDATE Customers SET firstName=`$firstName`, lastName=`$lastName`, email=`$email`, phone=`$phone`, services= `$ervices`, sessionDate= `$sessionDate`, duration=`$duration`, image=`$image`, WHERE id=`$id`";
        return mysqli_query ($this->conn, $update);
    }

    function remove($id){
        $remove = "DELETE FROM Customers WHERE id = $id";
        return mysqli_query($this->conn, $remove)
    }


