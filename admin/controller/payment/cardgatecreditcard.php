<?php
namespace Opencart\Admin\Controller\Extension\Cardgate\Payment;

include_once 'cardgate.php';

class Cardgatecreditcard extends CardgateGeneric {

    public function index() {
        $this->_index('cardgatecreditcard');
    }

    public function save() {
        return $this->_save('cardgatecreditcard');
    }
}
?>