<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class cardgateprzelewy24 extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateprzelewy24');
    }

    public function save() {
        return $this->_save('cardgateprzelewy24');
    }
}
?>