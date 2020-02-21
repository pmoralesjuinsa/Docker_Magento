<?php

class Grupojuinsa_Pahero_IndexController extends Mage_Core_Controller_Front_Action
{
    public $textoIndex;

    public function IndexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        $this->textoIndex = "index por defecto";
    }

    public function LamanoAction()
    {
        echo "la mano que tal";
    }
}