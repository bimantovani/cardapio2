<?php

$qntl1 = $_POST["quantidadel1"];
$qntl2 = $_POST["quantidadel2"];
$qntl3 = $_POST["quantidadel3"];
$qntb1 = $_POST["quantidadeb1"];
$qntb2 = $_POST["quantidadeb2"];
$qntb3 = $_POST["quantidadeb3"];
$qnta1 = $_POST["quantidadea1"];
$qnta2 = $_POST["quantidadea2"];
$qnta3 = $_POST["quantidadea3"];
$qntm1 = $_POST["quantidadem1"];
$qntm2 = $_POST["quantidadem2"];
$qntm3 = $_POST["quantidadem3"];
$obs = $_POST["obs"];
$valortotal = 0.00;

if(isset($_POST["opcao1"])) {
    $valortotal += 24.90 * $qntl1;
}

if(isset($_POST["opcao2"])) {
    $valortotal += 18.90 * $qntl2;
}

if(isset($_POST["opcao3"])) {
    $valortotal += 22.90 * $qntl3;
}

if(isset($_POST["bebida1"])) {
    $valortotal += 6.00 * $qntb1;
}

if(isset($_POST["bebida2"])) {
    $valortotal += 6.00 * $qntb2;
}

if(isset($_POST["bebida3"])) {
    $valortotal += 7.00 * $qntb3;
}

if(isset($_POST["acom1"])) {
    $valortotal += 10.00 * $qnta1;
}

if(isset($_POST["acom2"])) {
    $valortotal += 12.00 * $qnta2;
}

if(isset($_POST["acom3"])) {
    $valortotal += 8.00 * $qnta3;
}

if(isset($_POST["milk1"])) {
    $valortotal += 12.00 * $qntm1;
}

if(isset($_POST["milk2"])) {
    $valortotal += 12.00 * $qntm2;
}

if(isset($_POST["milk3"])) {
    $valortotal += 12.00 * $qntm3;
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$: ", $valortotal;
echo "<br>Obs: ", $obs;
echo "<br><a href='cardápio.html'>Voltar,</a>";