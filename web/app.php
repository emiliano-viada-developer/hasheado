<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// Use APC for autoloading to improve performance.
// Change 'sf2' to a unique prefix in order to prevent cache key conflicts
// with other applications also using APC.
/*
$apcLoader = new ApcClassLoader('sf2', $loader);
$loader->unregister();
$apcLoader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

//domain related logic
$domainArrayReversed = mb_split('\.', $_SERVER['SERVER_NAME']);
$domain              = isset($domainArrayReversed[1]) ? $domainArrayReversed[1] : '';
$subdomain           = isset($domainArrayReversed[0]) ? $domainArrayReversed[0] : '';

//This is for switching the environment based on the subdomain
$debug = true;
$env   = "dev";

switch ($subdomain) {
    case 'www':
        $env = "dev";
        break;
    case 'stage':
        $env = 'stage';
        break;
    case 'local':
    case 'dev':
        $env   = 'dev';
        $debug = true;
}

$kernel = new AppKernel($env, $debug);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
