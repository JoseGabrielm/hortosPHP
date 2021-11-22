<?php

 class ClassConexao{

     public $dsn = "*";
     public $username = "*";                  
     public $password = "*";             
      

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
