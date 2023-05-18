<?php

class ChequeController{
    public static function recuperarCheque(){
        include 'database/database.php';
        include 'middleware/recuperar-cheque.php';
    }
}