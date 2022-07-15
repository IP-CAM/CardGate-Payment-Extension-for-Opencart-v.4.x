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
$_['heading_title']          = 'CardGate';
$_['text_extension']         = 'Extensions';

// Text
$_['text_test_mode']         = 'Test mode';
$_['text_live_mode']         = 'Live mode';
$_['text_site_id']           = 'Fill in your site ID. You can find your site ID at your CardGate merchant backoffice.';
$_['text_hash_key']          = 'Fill in your hash key. If you use the hash key, make sure it is the same as in your CardGate merchant backoffice.';

$_['text_payment']           = 'Extensions';
$_['text_success']           = 'Success: You have modified CardGate Generic account details!';
$_['text_cardgate']          = '<a onclick="window.open(\'http://www.cardgate.com/\');"><img src="/extension/cardgate/admin/view/image/payment/cardgate.png" alt="CardGate Generic" title="Cardgate Generic" style="border: 1px solid #EEEEEE;" /></a>';

$_['text_author']            = '<a href="http://www.cardgate.com/" target="_blank">www.cardgate.com</a>';
$_['text_test_mode_help']    = 'Switching between Test and Live mode. If you don\'t have an account, sign up at http://www.cardgate.com/" .';
$_['text_merchant_id']       = 'Fill in your merchant ID number. You can find your merchant ID at your CardGate merchant backoffice.';
$_['text_api_key']           = 'Fill in you API key. This has been given to you by your account manager';
$_['text_order_description'] = 'Payment description that will be shown to the customer in the gateway screen. Variables: <b>%id%</b> = Order ID';

// Entry
$_['entry_test_mode']         = 'Test/Live Mode:';
$_['entry_site_id']           = 'Site ID:';
$_['entry_hash_key']          = 'Hash key:';
$_['entry_merchant_id']       = 'Merchant ID:';
$_['entry_api_key']           = 'API key:';
$_['entry_order_description'] = 'Order Description';
$_['entry_plugin_version']    = 'Current version';

// Error
$_['error_permission']       = 'Warning: You do not have permission to modify payment Card Gate Plus!';
$_['error_site_id']          = 'Site ID required.';
$_['error_hash_key']         = 'Hash key required.';
$_['error_merchant_id']      = 'Merchant ID required.';
$_['error_api_key']          = 'API key required.';
$_['error_payment_method']   = 'Please select at least one payment method.';