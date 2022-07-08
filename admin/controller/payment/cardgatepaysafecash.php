<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatepaysafecash extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatepaysafecash');
    }

    public function save() {
        return $this->_save('cardgatepaysafecash');
    }
}