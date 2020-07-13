<?php

$idade = 17;
$numeroPessoas = 1;

echo "Você só pode entrar se tiver mais de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroPessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos e não está acompanhado. Você não pode entrar";
}

