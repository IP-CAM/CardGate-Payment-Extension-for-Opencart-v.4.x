<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatepaypal extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatepaypal');
    }

    public function save() {
        return $this->_save('cardgatepaypal');
    }
}
?>