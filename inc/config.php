<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 257-3866',
        'email_id' => 'info@travelbest.online',
        'address' => '1400 21st Street , STE R Sacramento, CA 95811',
        'domain_name' => 'travelbest.online',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
