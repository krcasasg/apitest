<?php

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