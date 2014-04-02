<?php

/*
 * ver. 1.9.2
 * OpenPayU Standard Library

 * @copyright  Copyright (c) 2011-2012 PayU
 * @license    http://opensource.org/licenses/LGPL-3.0  Open Software License (LGPL 3.0)
 * http://www.payu.com
 * http://openpayu.com
 * http://twitter.com/openpayu
*/

    define('OPENPAYU_LIBRARY', true);

//    include(__DIR__ . "/" . $pClassName . ".php");

    include_once('openpayu_domain.php');
    include_once('OpenPayU/OpenPayUException.php');
    include_once('OpenPayU/OpenPayUNetwork.php');
    include_once('OpenPayU/OpenPayUBase.php');
    include_once('OpenPayU/OpenPayU.php');
    //include_once('OpenPayU/OpenPayUOAuth.php');

    include_once('OpenPayU/Result.php');
    //include_once('OpenPayU/ResultOAuth.php');
    include_once('OpenPayU/Configuration.php');


    include_once('OpenPayU/v2/Refund.php');
    include_once('OpenPayU/v2/Order.php');
    include_once('OpenPayU/Util.php');
    require_once('OpenPayU/Http.php');
    require_once('OpenPayU/HttpProtocol.php');
    require_once('OpenPayU/HttpCurl.php');
    //include_once('OpenPayU/OAuth.php');

//    include(__DIR__ . "/" . $pClassName . ".php");
