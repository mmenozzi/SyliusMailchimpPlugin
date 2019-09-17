<?php

declare(strict_types=1);

namespace Setono\SyliusMailchimpPlugin\Handler;

use Sylius\Component\Resource\Model\ResourceInterface;

interface CustomerMergefieldsUpdateHandlerInterface
{
    public function handle(ResourceInterface $resource, string $channelCode, ?string $oldCustomerEmail = null): void;
}