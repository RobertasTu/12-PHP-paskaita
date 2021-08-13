<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trikampis</title>
</head>
<body>
<form action='trikampis.php' method='get'>
    <input type='text' value='3' name='krastineA' />
    <input type='text' value='4' name='krastineB' />
    <input type='text' value='5' name='krastineC' />
   <button type='submit' name='skaiciuoti'>Patvirtinti</button>

</form>
<div class='rezultatas'>

</div>
</body>
</html>



<?php 
// 2. Susikurti klasę "Trikampis". Pagal klasę sukurti objektą.
// Objektas turi priimti du kintamuosius: a, b, c kraštines.
// Turi būti tikrinama ar trikampį galima sudaryti.
// Sukurti metodus, kurie skaičiuoja plotą, perimetrą, pusperimetrį, bei kiekvieną iš trikampio kampų.
// Informaciją išvesti į <p> žymę.


class Trikampis {
    public $krastineA;
    public $krastineB;
    public $krastineC;
    public $arTrikampis = false;
    public $rezultatas;
    public $laikinaskampai;
    public $laikKampas;
    public $kampai;

    function __construct($krastineA, $krastineB, $krastineC) {
        $this->krastineA = floatval($krastineA);
        $this->krastineB = floatval($krastineB);
        $this->krastineC = floatval($krastineC);
        $this->arTrikampis();
        $this->Perimetras();
        $this->Plotas();
        $this->pusPerimetris();
        $this->kampasA();
        $this->kampasB();
        $this->kampasC();
        

    }
    function arTrikampis() {
    if($this->krastineA + $this->krastineB > $this->krastineC && $this->krastineB + $this->krastineC > $this->krastineA && $this->krastineC + $this->krastineA > $this->krastineB) {
        $this->arTrikampis = true;
        return 'Trikampi sudaryti galime'; 
        echo '<br>';   
    }
}
    function Perimetras() {
       $this->rezultatas = $this->krastineA + $this->krastineB + $this->krastineC;
        echo $this->rezultatas.'=Perimetras';
        echo '<br>';

    }
    function Plotas() {
        $this->pusPerimetris = ($this->krastineA + $this->krastineB + $this->krastineC)/2;
        $this->rezultatas = sqrt($this->pusPerimetris*($this->pusPerimetris-$this->krastineA)*($this->pusPerimetris-$this->krastineB)*($this->pusPerimetris-$this->krastineC));
        echo $this->rezultatas.'=Plotas';
        echo '<br>';
    }

    function pusPerimetris() {
        $this->rezultatas = ($this->krastineA + $this->krastineB + $this->krastineC)/2;
       echo $this->rezultatas.'=Pusperimetris';
       echo '<br>';
    }
    function kampasA() {
        $this->laikinaskampasA = acos(($this->krastineB*$this->krastineB+$this->krastineC*$this->krastineC-$this->krastineA*$this->krastineA)/(2*$this->krastineB*$this->krastineC));
        $this->laikKampasA = (($this->laikinaskampasA * 180) / pi());
         $this->rezultatas = round($this->laikKampasA,2);
         echo $this->rezultatas.'=KampasA';
         echo '<br>';
     }
     function kampasB(){
         $this->laikinaskampasB = acos(($this->krastineA*$this->krastineA+$this->krastineC*$this->krastineC-$this->krastineB*$this->krastineB)/(2*$this->krastineA*$this->krastineC));
         $this->laikKampasB = (($this->laikinaskampasB  * 180) / pi());
         $this->rezultatas = round($this->laikKampasB,2);
         echo $this->rezultatas.'=KampasB';
         echo '<br>';
     }
 
        
     function kampasC(){
         $this->laikinaskampasC = acos(($this->krastineA*$this->krastineA+$this->krastineB*$this->krastineB-$this->krastineC*$this->krastineC)/(2*$this->krastineA*$this->krastineB));
         $this->laikKampasC = (($this->laikinaskampasC * 180) / pi());
         $this->rezultatas = round($this->laikKampasC,2);
         echo $this->rezultatas.'=KampasC';        
         echo '<br>';
     }

}
if(isset($_GET['skaiciuoti'])) {
    if(isset($_GET['krastineA']) && !empty($_GET['krastineA']) && isset($_GET['krastineB']) && !empty($_GET['krastineB']) && isset($_GET['krastineC']) && !empty($_GET['krastineC'])) {
        $krastineA = $_GET['krastineA'];
        $krastineB = $_GET['krastineB'];
        $krastineC = $_GET['krastineC'];
        $arTrikampis = false;
        $rezultatas;
        if($krastineA + $krastineB > $krastineC && $krastineB + $krastineC > $krastineA && $krastineC + $krastineA > $krastineB) {
            echo 'Trikampi sudaryti galima';
            echo '<br>';
            $trikampis = new Trikampis($krastineA, $krastineB, $krastineC);
        }
        else {
            echo 'Trikampio sudaryti negalima';
        }

       
    } else {
        echo 'truksta kintamuju';
    } 
} 
    


?>