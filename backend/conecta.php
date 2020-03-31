<?php

//===========conexão com banco de dados =============

$conn = new mysqli("localhost","root","","pesquisaajax"); //banco localhost
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');