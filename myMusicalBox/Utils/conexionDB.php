<?php


class conexionDB {
    
    public function getConexion(){
        $cnx=new PDO("mysql:host=sql208.byethost.com;dbname=b31_24785700_myMusicalBOx","b31_24785700","4dr61r7i12");
        return $cnx;
    }
    
}
