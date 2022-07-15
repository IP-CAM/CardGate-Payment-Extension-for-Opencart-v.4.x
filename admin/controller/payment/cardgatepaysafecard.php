<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatepaysafecard extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatepaysafecard');
    }

    public function save() {
        return $this->_save('cardgatepaysafecard');
    }
}
?>