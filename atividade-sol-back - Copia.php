<?php
$vetor1 = Array(1, 2, 3);
$vetor2 = Array(3, 4, 5);

$vetor3 = Array();

foreach($vetor1 as $x){
    $adiciona = false;
    foreach ($vetor2 as $y){
        if($x != $y){
            $adiciona = true;
        }else{
            $adiciona = false;
            break;
        }
    }

    if($adiciona == true) $vetor3[] = $x;
}

foreach($vetor2 as $y){
    $adiciona = false;
    foreach ($vetor1 as $x){
        if($y != $x){
            $adiciona = true;
        }else{
            $adiciona = false;
            break;
        }
    }

    if($adiciona == true) $vetor3[] = $y;
}
echo "<pre>";
print_r($vetor3);
echo "</pre>";
?>
