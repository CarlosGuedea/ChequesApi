<?php
class Base {
    function ConexionBD(){
        $con = new PDO('sqlsrv:Server=xamarinmultiplaforma.database.windows.net;Database=Cheuqes', 'user', 'Particionar22');
        if(!$con){
            exit;
        }
    return $con;
    }
}

?>