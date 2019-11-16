<?php

declare(strict_types=1);

namespace Sacks\SyliusStripeJsPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SacksSyliusStripeJsPlugin extends Bundle
{
    use SyliusPluginTrait;
}
