<?php

declare(strict_types=1);

/*
 * This file is part of ShipCloud PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\ShipCloud\API;

use Plients\Http\HttpResponse;

class Shipment extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->client->post('shipments', $parameters);
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("shipments/{$id}");
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update(array $parameters): HttpResponse
    {
        return $this->client->put("shipments/{$id}", $parameters);
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function delete(int $id): HttpResponse
    {
        return $this->client->delete("shipments/{$id}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function carriers(): HttpResponse
    {
        return $this->client->get('carriers');
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function rates(array $parameters): HttpResponse
    {
        return $this->client->post('rates', $parameters);
    }
}
