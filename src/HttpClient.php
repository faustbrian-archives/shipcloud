<?php

/*
 * This file is part of ShipCloud PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\ShipCloud;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\ShipCloud\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://www.shipcloud.com/vtapi/v2/',
        'headers' => [
           'User-Agent' => 'ShipCloud-PHP-Client/0.1.0',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
