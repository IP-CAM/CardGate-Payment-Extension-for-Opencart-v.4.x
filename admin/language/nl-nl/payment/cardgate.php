<?php
/**
 * Opencart CardGate payment extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Payment
 * @package     Payment_CardGate
 * @author      Richard Schoots, <info@cardgate.com>
 * @copyright   Copyright (c) 2022 CardGate. (http://www.cardgate.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

// Heading
$_['heading_title']          = 'Cardgate Algemeen';
$_['text_extension']         = 'Extensions';

// Text
$_['text_test_mode']         = 'Test mode';
$_['text_live_mode']         = 'Live mode';
$_['text_site_id']           = 'Vul hier uw site ID in. Deze kunt u vinden in de Cardgate merchant backoffice.';
$_['text_hash_key']          = 'Vul hier uw hash key in. Indien u de hash key gebruikt, zorg er dan voor dat deze hetzelfde is als in uw Cardgate merchant backoffice.';

$_['text_payment']                      = 'Extensions';
$_['text_success']           = 'Gelukt: U heeft uw Cardgate algemeen instellingen gewijzigd!';
$_['text_cardgate']          = '<a onclick="window.open(\'http://www.cardgate.com/\');"><img src="/extension/cardgate/admin/view/image/payment/cardgate.png" alt="Cardate Algemeen" title="Cardgate Algemeen" style="border: 1px solid #EEEEEE;" /></a>';

$_['text_author']            = '<a href="http://www.cardgate.com/" target="_blank">www.cardgate.com</a>';
$_['text_test_mode_help']    = 'U gaat nu van Test naar Live modus. Indien u geen account heeft, schrijf u dan in bij http://www.cardgate.com/ .';
$_['text_merchant_id']       = 'Vul hier uw merchant ID in. Deze kunt u vinden in de Cardgate merchant backoffice.';
$_['text_api_key']           = 'Vul hier uw API key in . Die heeft u gekregen van uw account manager';
$_['text_order_description'] = 'Omschrijving voor de betaling welke getoond zal worden in het betaalscherm. Variabelen: <b>%id%</b> = Order ID';

// Entry
$_['entry_test_mode']         = 'Test/Live Modus:';
$_['entry_site_id']           = 'Site ID:';
$_['entry_hash_key']          = 'Hash key:';
$_['entry_merchant_id']       = 'Merchant ID:';
$_['entry_api_key']           = 'API key:';
$_['entry_payment_title']     = 'Titel:';
$_['entry_gateway_language']  = 'Gateway Taal:';
$_['entry_order_description'] = 'Omschrijving Bestelling:';
$_['entry_plugin_version']    = 'Huidige version';

// Error
$_['error_permission']       = 'Waarschuwing: U heeft geen toestemming om de betaal methode CardGate te wijzigen!';
$_['error_site_id']          = 'Site ID vereist!';
$_['error_hash_key']         = 'Hash key vereist.';
$_['error_merchant_id']      = 'Merchant ID vereist!';
$_['error_api_key']          = 'API key vereist!';
$_['error_payment_method']   = 'Selecteer minimaal een betaalmethode.';