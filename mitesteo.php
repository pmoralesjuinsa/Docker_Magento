<?php

include 'app/Mage.php';
Mage::app();

$mensaje = Mage::getModel("pahero/mano")->Dale();
