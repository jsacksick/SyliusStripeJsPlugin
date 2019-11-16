<?php

declare(strict_types=1);

namespace Sacks\SyliusStripeJsPlugin\Payum;

use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\GatewayFactory;

final class StripeJsGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config): void
    {
        $config->defaults([
            'payum.factory_name' => 'stripe_js',
            'payum.factory_title' => 'Stripe.js',
        ]);
    }
}
