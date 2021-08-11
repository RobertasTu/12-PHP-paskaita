<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12Paskaita</title>
</head>
<body>
<!-- 1.Susikurti klasę "Klientas".
Kintamieji:
vardas
pavarde
asmens kodas
prisijungimo data
adresas
elpastas.

Susikūrus klasę, sukurti masyvą, kuriame turi būti 200 kliento objektų
Duomenis užpildyti savo nuožiūrą.
Visą "Klientai" objektų masyvą atvaizduoti lentelėje <table>.

2. Susikurti klasę "Trikampis". Pagal klasę sukurti objektą.
Objektas turi priimti du kintamuosius: a, b, c kraštines.
Turi būti tikrinama ar trikampį galima sudaryti.
Sukurti metodus, kurie skaičiuoja plotą, perimetrą, pusperimetrį, bei kiekvieną iš trikampio kampų.
Informaciją išvesti į <p> žymę.

3. Susikurti klasę "Keturkampis". Pagal klasę sukurti objektą.
Objektas turi priimti du kintamuosius: a ir b kraštines.
Sukurti metodus, kurie skaičiuoja kvadrato plotą, perimetrą, įstrižainės ilgį.
Informaciją išvesti į <p> žymę.

Papildoma: nubraižyti kvadratą(pikseliais) pagal a ir b kraštines. Kvadrato nubraižymas turi būti objekto metodas. -->


    <?php


    //klase - sablonas
    class Klientai {
        public $vardas;
        public $pavarde;
        public $asmensKodas;
        public $prisijungimoData;
        public $adresas;
        public $elPastas;

        function __construct($a, $b, $c, $d, $e, $f) {
           
            $this->vardas = $a;
            $this->pavarde = $b;
            $this->asmensKodas = $c;
            $this->prisijungimoData = $d;
            $this->adresas = $e;
            $this->elPastas = $f;

        }

    }

    // $klientas1 = new Klientas('Vardas1', 'Pavarde1');
    // $klientas2 = new Klientas('Vardas2', 'Pavarde2');

    $klientai = array();
    //...
       
        for($i=0; $i<200; $i++) {
            array_push($klientai, new Klientai('vardas'.$i, 'Pavarde'.$i, rand(100,200), date('l jS \of F Y h:i:s A'), 'adresas'.($i+1), 'vardas'.($i+1).'pavarde'.($i+1).'@post.lt'));
        }
            echo '<table>';

            foreach ($klientai as $eilute) {
         
                echo '<tr>';
        
                foreach ($eilute as $stulpelis) {
        
                    echo '<td>';
        
                    echo $stulpelis;
        
                    echo '</td>';
        
                }
        
                echo '</tr>';
        
            }
        
        
        
            echo '</table>';


    //2 budas
//     class Klientai {
//         public $klientai;
//         public $vardas;
//         public $pavarde;

//         function __construct() {
           
//     }
//     for($i=0; $i<200; $i++) {
//         array_push($this->klientai, new Klientas('Vardas'.$i, 'Pavarde'.$i));
// }

// var_dump($this->klientai)
// $klientaiObjektas = new Klientai();

    
        

//         echo $Klientas;
    


    ?>
    
</body>
</html>