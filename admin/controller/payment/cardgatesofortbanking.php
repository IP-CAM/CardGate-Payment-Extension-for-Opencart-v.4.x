<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatesofortbanking extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatesofortbanking');
    }

    public function save() {
        return $this->_save('cardgatesofortbanking');
    }
}
?>