<?php

 class ClassConexao{

     public $dsn = "oci:dbname=BRP01;host=10.21.33.235";
     public $username = "Inventario";                  
     public $password = "in05rio04";             
      

public function conectaDB(){

try{

$base = new PDO($this->dsn , $this->username , $this->password);


if($base){

    return $base;

}

}catch(Exception $e){
    echo "erro de conexao ".$e->getMessage();


}
 

}

}

?>