<?PHP 
	$date = date("Y");
// Funci�n que obtiene el nombre de un mes
   function nombreMes ($mes)
   {
      $meses = array ("janeiro", "fevereiro", "março", "abril", "maio",
                      "junho", "julho", "agosto", "setembro",
                      "outubro", "novembro", "dezembro");
      $i=0;
      $enc=false;
      while ($i<12 and !$enc)
      {
         if ($i == $mes-1)
            $enc = true;
         else
            $i++;
      }
      return ($meses[$i]);
   }
   
   $dia  = date ("j");
   $mes  = date ("n");
   $anyo = date ("Y");

?>