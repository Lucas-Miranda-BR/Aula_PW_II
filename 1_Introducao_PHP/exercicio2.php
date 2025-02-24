<?php
$idade = 8; // Digite um número qualquer.

// Verificação da idade do usuário.

if ($idade >= 60) {
    echo "O usuário é um idoso.";  // Caso a idade seja maior ou igual a 60 anos. O usuário é um idoso.
}                   
else if ($idade >= 18 && $idade < 60) {
    echo "O usuário é um adulto."; // Caso a idade seja maior ou igual a 18 anos e menor que 60 anos. O usuário é um adulto.
}
else if ($idade >= 12 && $idade < 18) {
    echo "O usuário é um adoselcente."; // Caso a idade seja maior ou igual a 12 anos e menor que 18 anos. O usuário é um adolescente.
}
else{
    echo "O usuário é uma criança."; // Caso a idade seja menor que 12. O usuário é uma criança.
}
?>
