<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class CardgateDirectdebit extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatedirectdebit');
    }

    public function save() {
        return $this->_save('cardgatedirectdebit');
    }
}
?>