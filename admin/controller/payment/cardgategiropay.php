<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgategiropay extends CardgateGeneric {

    public function index() {
        $this->_index('cardgategiropay');
    }

    public function save() {
        return $this->_save('cardgategiropay');
    }
}
?>