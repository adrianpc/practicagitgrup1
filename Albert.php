
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function sumar($i,$j){
  $i=intval(trim($i));
  $j=intval(trim($j));
  return $i+$j;
}

class Verdura {

   var $comestible;
   var $color;

   function Verdura($comestible, $color="verde")
   {
       $this->comestible = $comestible;
       $this->color = $color;
   }

   function es_comestible()
   {
       return $this->comestible;
   }
   
   function qué_color()
   {
       
       return $this->color;
       
   }

} 
class Espinaca extends Verdura {

   var $concinada = false;

   function Espinaca()
   {
       $this->Verdura(true, "verde");
   }

  
} 

?>
        
    </body>
</html>
