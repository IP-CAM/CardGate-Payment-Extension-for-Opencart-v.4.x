<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgateafterpay extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateafterpay');
    }

    public function save() {
        return $this->_save('cardgateafterpay');
    }
}
?>