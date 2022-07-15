<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgateidealqr extends CardgateGeneric {

    public function index() {
        $this->_index('cardgateidealqr');
    }

    public function save() {
        return $this->_save('cardgateidealqr');
    }
}
?>