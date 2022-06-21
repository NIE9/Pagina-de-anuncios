<?php
$mysqli = new mysqli("locallhost", "root", "", "contatos");

if ($mysqli->connect_errno) {
    echo "falhou ao conectar ao MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

