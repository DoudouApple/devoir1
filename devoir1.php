// Exercice1:
<?php
// Partie A:
function parite ($nombre){
    if ($nombre%2 == 0) {
        return "$nombre est paire";
    }else {
        return "$nombre est impaire";
    }
}
echo parite(5)."<br>";

// Partie B
function max_min ($a,$b,$c){
    $max=0;
    $min=0;
    $inter=0;
    if ($a>$b) {
        $max = $a;
        $min = $b;

    }else {
        $max = $b;
        $min = $a;
    }
    if ($max>$c) {
        $inter = $c;
    }else {
        $inter = $max;
        $min = $c;
    }
    if ($min>$c) {
        $inter = $max;
        $min = $c;
    }else {
        $inter = $c;
    }
        echo "Le nombre le plus grand est $max <br>";
        echo "Le nombre le plus petit est $min <br>";
        echo parite($max)."<br>";
        echo parite($min)."<br>";
}
echo max_min(35,64,16);

//Ecercice 2:
// Partie A:

function prems_parf($nbre){
    $cpt=0;
    $som=0;
    for ($i=1; $i<= $nbre ; $i++) { 
        if ($nbre % $i==0) {
            $cpt=$cpt+1;
        }
    }
    if ($cpt==2) {
        echo "$nbre est premier <br>";
    }else {
        echo "$nbre n'est pas premier <br>";
    }
    for ($j=1; $j <=$nbre ; $j++) { 
        if ($nbre %$j==0) {
            $som+=$j;
        }
    }
    if($som==$nbre){
        return "$nbre est parfait<br>";
    }else {
        return "$nbre n'est pas parfait<br>";
    }
        
}
echo prems_parf(10);

//Partie B:

function affichage($aff){
    for ($i=1; $i <= $aff ; $i++) {
        echo prems_parf($i);
    }
}
echo affichage(100);

function annee($nb){
    if ($nb%4==0) {
        if ($nb % 100 == 0) {
            if ($nb % 400==0) {
                return TRUE;
            }else {
                return False;
            }
        }else {
            return False;
        }
        
    }else {
        return False;
    }
}
echo annee(2001);

?>