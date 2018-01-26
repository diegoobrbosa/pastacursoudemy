<?php

$nome = "Diego Barbosa";

function teste() {
  global $nome;
  echo $nome;
}

function teste2() {
  $nome = "Barbosa";
  echo $nome."agora no teste2" ;

}

teste();

teste2();

?>
