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
    <button id='Plotas'>Plotas</button>
    <button id='Perimetras'>Perimetras</button>
    <button id='pusPerimetris'>Pusperimetris</button>
    <button id='trKampai'>Kampai</button>

    

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

    function __construct($krastineA, $krastineB, $krastineC) {
        $this->krastineA = floatval($krastineA);
        $this->krastineB = floatval($krastineB);
        $this->krastineC = floatval($krastineC);

    }
    function arTrikampis() {
    if($this->krastineA + $this->krastineB > $this->krastineC && $this->krastineB + $this->krastineC > $this->krastineA && $this->krastineC + $this->krastineA > $this->krastineB) {
        $this->arTrikampis = true;
        return 'Trikampi sudaryti galime';    
    }
    function Perimetras() {
       $this->rezultatas = $this->krastineA + $this->krastineB + $this->krastineC;
        echo $this->rezultatas.'=Perimetras';

    }
    function Plotas() {
        $this->pusPerimetris = ($this->krastineA + $this->krastineB + $this->krastineC)/2;
        $this->rezultatas = Math.SQRT($this->pusPerimetris($this->pusPerimetris-$this->krastineA)*($this->pusPerimetris-$this->krastineB)*($this->pusPerimetris-$this->krastineC));
        echo $this->rezultatas.'=Plotas';
    }

    function pusPerimetris() {
        $this->rezultatas = ($this->krastineA + $this->krastineB + $this->krastineC)/2;
       echo $this->rezultatas.'=Pusperimetris';
    }
    // function trKampai() {
    //     $laikinaskampai = [0, 0, 0];
    //     $laikinaskampai[0] = Math.acos(($this->krastineB*$this->krastineB+$this->krastineC*$this->krastineC-$this->krastineA*$this->krastineA)/(2*$this->krastineB*$this->krastineC));
    //     echo ($laikinaskampai[0]);
    //     $laikKampas = [0, 0, 0];
    //     $laikKampas[0] = (($laikinaskampai[0] * 180) / Math.PI);
    //     $this->kampai[0] = $laikKampas[0].toFixed(2);

    //     $laikinaskampai[1] = Math.acos((this.a*this.a+this.c*this.c-this.b*this.b)/(2*this.a*this.c));
    //     $laikKampas[1] = (($laikinaskampai[1]  * 180) / Math.PI);
    //     $this->kampai[1] = $laikKampas[1].toFixed(2);


    //     $laikinaskampai[2] = Math.acos(($this->krastineA*$this->krastineA+$this->krastineB*$this->krastineB-$this->krastineC*$this->krastineC)/(2*$this->krastineA*$this->krastineB));
    //     $laikKampas[2] = (($laikinaskampai[2] * 180) / Math.PI);
    //     $this->kampai[2] = $laikKampas[1].toFixed(2);

    //     echo kampai();

    // }

}
if(isset($_GET['skaiciuoti'])) {
    if(isset($_GET['krastineA']) && !empty($_GET['krastineA']) && isset($_GET['krastineB']) && !empty($_GET['krastineB']) && isset($_GET['krastineC']) && !empty($_GET['krastineC'])) {
        $krastineA = $_GET['krastineA'];
        $krastineB = $_GET['krastineB'];
        $krastineC = $_GET['krastineC'];
        $arTrikampis = false;
        $rezultatas;


        $trikampis = new Trikampis($krastineA, $krastineB, $krastineC);
    } else {
        echo 'truksta kintamuju'
    }
}

?>