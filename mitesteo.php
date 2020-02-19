<?php

include 'app/Mage.php';
Mage::app();

$mensaje = Mage::getModel("pahero/pahero");

var_dump($mensaje);