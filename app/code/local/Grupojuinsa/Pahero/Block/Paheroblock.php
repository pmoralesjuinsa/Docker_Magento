<?php

class Grupojuinsa_Pahero_Block_Paheroblock extends Mage_Core_Block_Template
{
    public function getText()
    {
        return 'bloque blocoso!';
    }

    public function getTheImage()
    {
        return Mage::getSingleton('core/design_package')->getSkinBaseUrl().'images/xvideosMagento.png';
    }

}