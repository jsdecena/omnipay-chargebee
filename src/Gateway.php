<?php

namespace Omnipay\Chargebee;

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\ListResult;
use ChargeBee\ChargeBee\Models\Customer;
use ChargeBee\ChargeBee\Models\Subscription;
use ChargeBee\ChargeBee\Result;
use Omnipay\Common\GatewayInterface;
use Omnipay\Stripe\AbstractGateway;

class Gateway extends AbstractGateway implements GatewayInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Chargebee';
    }

    /**
     * @param array $parameters
     * @return void
     */
    public function authorize(array $parameters = array())
    {
        Environment::configure($parameters['site_name'], $parameters['site_api_key']);
    }

    public function capture(array $parameters = array())
    {
        // TODO: Implement capture() method.
    }

    /**
     * @param array $parameters
     * @return Charge
     */
    public function purchase(array $parameters = array()): Charge
    {
        $customerData = Customer::retrieve($parameters['subscriber_id']);

        $toArray = json_decode($customerData->toJson(), true);
        $subscription = Subscription::createWithItems($toArray['customer']['id'], [
            "subscriptionItems" => $parameters['subscription_items'],
        ]);

        return new Charge($subscription);
    }

    /**
     * @return Result|ListResult
     */
    public function customers(): Result|ListResult
    {
        return Customer::all();
    }
}
