<?php

$idade = 16;
$numPessoas = 0;

echo "Voc� s� pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16, se estiver acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos. Pode entrar";
} elseif ($idade >= 16 && $numPessoas > 1){
    echo "Voc� tem $idade anos, est� acompanhado(a), ent�o pode entrar." . PHP_EOL;
    } else {
        echo "Voc� s� tem $idade anos. Voc� n�o pode entrar.";
}
    


echo PHP_EOL;

echo "Adeus!";