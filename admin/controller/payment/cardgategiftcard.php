<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgategiftcard extends CardgateGeneric {

    public function index() {
        $this->_index('cardgategiftcard');
    }

    public function save() {
        return $this->_save('cardgategiftcard');
    }
}
?>