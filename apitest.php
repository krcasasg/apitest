<?php
/*
    Plugin Name: Api test
    Plugin URI: http://example.org
    Description: Api test
    Author: krcasasg
    Version: 1.0
    Author URI: http://example.org
*/
require 'vendor/autoload.php';
require 'config.php';
if(!defined('ABSPATH')){
    exit;
}



add_action('admin_init', 'apitest_create_client');
function apitest_create_client(){

    $params = [
        /**
        * API Keys
        * These are test api keys that can be used for testing your integration:
        */
        'cw.client_id' => 'ff72ce315d1259e822f47d87d02d261e',
        'cw.client_secret' => '$2a$10$E2jVWDADFA5gh6zlRVcrlOOX01Q/HJoT6hXuDMJxek.YEo.lkO2T6',
        /**
         * CodesWholesale ENDPOINT
         */
        'cw.endpoint_uri' => \CodesWholesale\CodesWholesale::SANDBOX_ENDPOINT,
        /**
         * Due to security reasons, you should use SessionStorage only while testing.
         * In order to go live, you should change it to database storage.
        */
        'cw.token_storage' => new \CodesWholesale\Storage\TokenSessionStorage()
        ];

    $clientBuilder = new \CodesWholesale\ClientBuilder($params);
    $client = $clientBuilder->build();
    var_dump($client);
    //return $client;
}