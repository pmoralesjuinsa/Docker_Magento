<?php

class Grupojuinsa_Pahero_IndexController extends Mage_Core_Controller_Front_Action
{
    public function IndexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        echo "index por defecto";
    }

    public function LamanoAction()
    {
        echo "la mano que tal";
    }
}