<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatebancontact extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatebancontact');
    }

    public function save() {
        return $this->_save('cardgatebancontact');
    }
}
?>