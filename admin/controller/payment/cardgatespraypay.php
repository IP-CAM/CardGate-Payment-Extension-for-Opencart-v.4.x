<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatespraypay extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatespraypay');
    }

    public function save() {
        return $this->_save('cardgatespraypay');
    }
}
?>