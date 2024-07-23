<?php

//Criando uma instância para o carro
$meuCarro = new Carro("RAM", "RAMPAGE", "2024");

//Utilizando métodos do objeto
echo $meuCarro->acelerar() . "<br>";
echo $meuCarro->frear() . "<br>";
?>