<?php
//namespace OpenPayuSdk\Examples\V2;

/**
 * OpenPayU
 *
 * @copyright  Copyright (c) 2013 PayU
 * @license    http://opensource.org/licenses/LGPL-3.0  Open Software License (LGPL 3.0)
 *
 * http://www.payu.com
 * http://openpayu.com
 * http://twitter.com/openpayu
 *
 */
//OpenPayU_Configuration::setEnvironment('custom','https://secure.payu.te2');
OpenPayU_Configuration::setEnvironment('secure');
OpenPayU_Configuration::setMerchantPosId('145227');
OpenPayU_Configuration::setSignatureKey('13a980d4f851f3d9a1cfc792fb1f5e50');

/* path for example files*/
$dir = explode(basename(dirname(__FILE__)) . '/', $_SERVER['SCRIPT_NAME']);
$directory = $dir[0] . basename(dirname(__FILE__));
$url = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $dir[0];

define('HOME_DIR', $url);
define('EXAMPLES_DIR', HOME_DIR . 'examples/');