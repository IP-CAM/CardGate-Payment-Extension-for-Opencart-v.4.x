<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgateonlineueberweisen extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateonlineueberweisen');
    }

    public function save() {
        return $this->_save('cardgateonlineueberweisen');
    }
}
?>