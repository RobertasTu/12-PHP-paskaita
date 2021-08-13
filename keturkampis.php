<!-- 3. Susikurti klasę "Keturkampis". Pagal klasę sukurti objektą.
Objektas turi priimti du kintamuosius: a ir b kraštines.
Sukurti metodus, kurie skaičiuoja kvadrato plotą, perimetrą, įstrižainės ilgį.
Informaciją išvesti į <p> žymę.

Papildoma: nubraižyti kvadratą(pikseliais) pagal a ir b kraštines. Kvadrato nubraižymas turi būti objekto metodas. --> -->



<form action='keturkampis.php' method='get'>
    <input type='text' value='' name='a' />
    <input type='text' value='' name='b' />
      <button type='submit' name='skaiciuoti'>Patvirtinti</button>

</form>
<div class='rezultatas'>

</div>


<?php

class Keturkampis {
public  $a;
public  $b;
public $rezultatas;





function __construct($a,$b){
    $this ->a = floatval($a);
    $this ->b = floatval($b);
    $this -> perimetras();
    $this-> plotas();
    $this->istrizaine();
    $this->braizymas();


}



function perimetras (){
$this->rezultatas = (($this->a+$this->b)*2);
  echo 'Perimetras='.$this->rezultatas;
   echo '<br>';


}

function plotas () {
    $this->rezultatas = $this->a*$this->b;
    echo 'Plotas='.$this->rezultatas;
    echo '<br>';
}

function istrizaine() {
    $this->rezultatas = sqrt($this->a**2 + $this->b**2);
    echo 'Istrizaines ilgis ='.$this->rezultatas;
    echo '<br>';
}

function braizymas()
        {
            echo '<br>Keturkampis:';
            echo '<div class="braizymas" ';
            echo 'style="height:'.$this->a.'px; width:'.$this->b.'px;';   
            echo 'background:green" ></div>';

        }



}
if(isset($_GET['skaiciuoti'])) {
    if(isset($_GET['a']) && !empty($_GET['a']) && isset($_GET['b']) && !empty($_GET['b'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        
        $rezultatas;


        $keturkampis = new Keturkampis($a, $b);
    } else {
        echo 'truksta kintamuju';
    } 
}






?>
