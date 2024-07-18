<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgateprzelewy extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateprzelewy');
    }

    public function save() {
        return $this->_save('cardgateprzelewy');
    }
}
?>