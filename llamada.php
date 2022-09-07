<?php 

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $valor1= $_POST['valor1'];
    $valor2= $_POST['valor2'];
    $operador= $_POST['operador'];
    if (($valor1)and($valor2)){
        $res=0;
        switch($operador){
            case '+': $res=$valor1+$valor2;
                break;
            case '-': $res=$valor1-$valor2;
                break;
            default:
                echo "no tenemos esa operacion ";

        }

        
        echo "el resultado es $res";
    }else{
        echo "valor vacio";
    }
    
   
   // echo "esta es el valor de  {$_POST['nombre']}";


}else{
    echo "usted no ha enviado nada";
}



?>