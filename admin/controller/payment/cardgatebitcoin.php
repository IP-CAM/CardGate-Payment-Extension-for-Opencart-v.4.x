<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatebitcoin extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatebitcoin');
    }

    public function save() {
        return $this->_save('cardgatebitcoin');
    }
}
?>