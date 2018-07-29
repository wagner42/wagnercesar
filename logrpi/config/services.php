<?php
/*
 * Configuration file for services.php
 *
 * If you already have the services.php under your config/ directory, just copy the dynamodb part to the file.
 */
return [
    'dynamodb' => [
        // AWS Access Key.
        'key'      => $_SERVER['DYNAMODB_KEY'],
        // AWS Secret Key.
        'secret'   => $_SERVER['DYNAMODB_SECRET'],
        // AWS Region.
        'region'   => $_SERVER['DYNAMODB_REGION'],
        // DynamoDB version.
        'version'  => $_SERVER['DYNAMODB_VERSION'],
        // Only used for local endpoint.
        'endpoint' => $_SERVER['DYNAMODB_LOCAL_ENDPOINT'],
    ],
];