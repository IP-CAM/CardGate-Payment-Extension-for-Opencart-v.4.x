<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatebanktransfer extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatebanktransfer');
    }

    public function save() {
        return $this->_save('cardgatebanktransfer');
    }
}
?>