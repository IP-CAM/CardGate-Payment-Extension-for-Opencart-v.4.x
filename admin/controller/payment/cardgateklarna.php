<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgateklarna extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateklarna');
    }

    public function save() {
        return $this->_save('cardgateklarna');
    }
}
?>