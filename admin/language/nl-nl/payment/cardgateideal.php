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
$_['heading_title']          = 'Cardgate iDEAL';
$_['text_extension']         = 'Extensions';

// Text
$_['text_payment']                      = 'Extensions';
$_['text_cardgateideal']             = '<a onclick="window.open(\'http://www.cardgate.com/\');"><img src="/extension/cardgate/admin/view/image/payment/cardgate.png" alt="CardGate iDEAL" title="CardGate iDEAL" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']                      = 'Gelukt: U heeft uw Cardgate iDEAL instellingen gewijzigd!';
$_['text_custom_payment_method_text']   = 'Gebruik een aangepaste tekst voor de betaalmethode';
$_['text_total']                        = 'Het order totaal moet boven dit bedrag zijn om de betaalmethode te tonen.';

// Entry
$_['entry_total']                       = 'Totaal:';
$_['entry_custom_payment_method_text']  = 'Custom betaalmethode tekst:';
$_['entry_order_status']                = 'Order Status';
$_['entry_geo_zone']                    = 'Geo Zone:';
$_['entry_sort_order']                  = 'Sorteer Volgorde:';
$_['entry_status']                      = 'Status';
$_['entry_show_issuers']                = 'Toon issuers (banken)';
$_['entry_show_issuers_explain']        = 'iDEAL v2 laat standaard geen issuers (banken) meer zien (Verplicht door iDEAL).';

// Error
$_['error_permission']       = 'Waarschuwing: U heeft geen toestemming om de CardGate betaalmethode te wijzigen!';