<?php

namespace Omnipay\Chargebee\Tests\Unit;

use Mockery;
use Omnipay\Chargebee\Gateway;
use Omnipay\Chargebee\Tests\BaseTestCase;

class ChargeTest extends BaseTestCase
{
    /** @test */
    public function it_can_authorize()
    {
        $mockery = Mockery::mock(Gateway::class);
        $mockery->shouldReceive('authorize', 'purchase');
    }

    /** @test */
    public function it_can_make_purchase()
    {
        $mockery = Mockery::mock(Gateway::class);
        $data = [
            'subscriber_id' => 'test-id',
            'subscription_items' => [
                [
                    'item1' => 'test-item'
                ]
            ]
        ];
        $mockery->shouldReceive('purchase')
            ->once()
            ->with($data);

        $mockery->purchase($data);
    }
}
