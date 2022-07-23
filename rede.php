<?php
   $servidor= '127.0.0.1';
   $usuario = 'root';
   $senha='';
   $bancoDados='formulario';
   $conexao= new mysqli($servidor,$usuario,$senha,$bancoDados); 
  //if($conexao->connect_errno)
  //{
    //echo "erro";
 // }
  //else
  //echo "deu certo";
?>