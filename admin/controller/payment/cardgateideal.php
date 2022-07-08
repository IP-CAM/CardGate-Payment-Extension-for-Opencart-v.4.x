<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgateideal extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateideal');
    }

    public function save() {
        return $this->_save('cardgateideal');
    }
}
?>