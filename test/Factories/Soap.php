<?php

use League\FactoryMuffin\Facade as FactoryMuffin;

FactoryMuffin::define('Webservicesnl\Soap\Client\SoapSettings', [
    'authentication'    => function () {
        return array_rand([SOAP_AUTHENTICATION_BASIC, SOAP_AUTHENTICATION_DIGEST]);
    },
    'cacheWsdl'         => 'numberBetween|0;3',
    'classMap'          => null,
    'compression'       => function () {
        return array_rand([SOAP_COMPRESSION_DEFLATE, SOAP_COMPRESSION_GZIP, SOAP_COMPRESSION_ACCEPT]);
    },
    'connectionTimeout' => 'numberBetween|6;60',
    'compression'       => SOAP_COMPRESSION_ACCEPT,
    'context'           => '',
    'encoding'          => '',
    'exceptions'        => '',
    'features'          => function () {
        return array_rand([SOAP_SINGLE_ELEMENT_ARRAYS, SOAP_USE_XSI_ARRAY_TYPE, SOAP_WAIT_ONE_WAY_CALLS]);
    },
    'keepAlive'         => 'boolean',
    'localCert'         => null,
    'passphrase'        => 'sentence',
    'password'          => 'fakePassword',
    'proxyHost'         => '',
    'proxyLogin'        => '',
    'proxyPassword'     => 'fakePassword',
    'proxyPort'         => 'numberBetween|1000;2000',
    'retryMinutes'      => 'numberBetween|10;120',
    'responseTimeout'   => 'numberBetween|20;60',
    'sslMethod'         => '',
    'typeMap'           => null,
    'uri'               => '',
    'userAgent'         => 'bla',
    'username'          => 'userName',
]);