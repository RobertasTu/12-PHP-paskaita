

<?php
class Keturkampis {

public  $krastineA;

public  $krastineB;





function __construct($a,$b){

    $this -> KrastineA = $a;

    $this -> KrastineB = $b;

    $this -> perimetras();



}



function perimetras (){



$perimetras = (($this -> KrastineA + $this -> KrastineB)*2);

//nei isvedi, nei returnini

    echo $perimetras;



}



}



$perimetras = new Keturkampis (5,6);


?>
