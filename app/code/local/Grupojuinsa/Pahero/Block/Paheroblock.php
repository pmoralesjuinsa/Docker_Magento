<?php

class Grupojuinsa_Pahero_Block_Paheroblock extends Mage_Core_Block_Template
{
    public function getText()
    {
        return 'bloque blocoso!';
    }

    public function getTheImage()
    {
        return $this->getSkinUrl('media/xvideosMagento.png');
    }
}