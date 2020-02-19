<?php

class Grupojuinsa_Pahero_Model_Observer extends Mage_Core_Model_Observer
{
    public function displayDameTuDinero()
    {
        echo "<script>alert('Dame todo tu dinero o te sigo molestando')</script>";
    }
}