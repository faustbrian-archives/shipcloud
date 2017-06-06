<?php

/*
 * This file is part of ShipCloud PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\ShipCloud\Api;

use BrianFaust\ShipCloud\Client;

class Shipment extends Client
{
    public function create($id, $carrier, $to, $from, $package, $service, $reference_number, $create_shipping_label)
    {
        return $this->post('shipments', compact('id', 'carrier', 'to', 'from', 'package', 'service', 'reference_number', 'create_shipping_label'));
    }

    public function details($id)
    {
        return $this->get("shipments/$id");
    }

    public function update($id, $carrier, $to, $from, $package, $service, $reference_number, $create_shipping_label)
    {
        return $this->put("shipments/$id", compact('carrier', 'to', 'from', 'package', 'service', 'reference_number', 'create_shipping_label'));
    }

    public function delete($id)
    {
        return $this->delete("shipments/$id");
    }

    public function carriers()
    {
        return $this->get('carriers');
    }

    public function rates($carrier, $width, $length, $height, $weight)
    {
        return $this->post('rates', compact('carrier', 'width', 'length', 'height', 'weight'));
    }
}
