<?php
/*Función que se encarga de eliminar codigo malicioso de las variables.*/
function limpiar($var)
{
	$var = trim($var);
	$var = htmlspecialchars($var);
	$var = str_replace(chr(160),'',$var);
	return $var;
}

/*Función que se encarga de validar el email de registro para que sea correcto.*/
function validar_email($email){
    $mail_correcto = 0; 
    //compruebo unas cosas primeras 
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@"))
    { 
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," ")))
       {//miro si tiene caracter .
          if (substr_count($email,".")>= 1)
          {//obtengo la terminacion del dominio 
             $term_dom = substr(strrchr ($email, '.'),1); 
             //compruebo que la terminaci?n del dominio sea correcta 
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) )
             {//compruebo que lo de antes del dominio sea correcto 
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                if ($caracter_ult != "@" && $caracter_ult != ".")
                { 
                   $mail_correcto = 1; 
                }
             }
          }
       }
    }
    if ($mail_correcto) 
       return 1;
    else 
       return 0;
}

function validarcomentarios($comment){
	$comentario_correcto = 0;
	//NO cumple longitud minima
	if(strlen($comment) < 260)
	{
	$comentario_correcto = 1;
	}
	if ($comentario_correcto)
		return 1;
	else
		return 0;
}

function validarnombre($name){
	$nombre_correcto = 0;
	//NO cumple longitud minima
	if(strlen($name) < 20)
	{
	$nombre_correcto = 1;
	}
	if ($nombre_correcto)
		return 1;
	else
		return 0;
}

?>