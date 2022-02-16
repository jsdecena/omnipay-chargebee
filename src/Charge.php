<?php

namespace Omnipay\Chargebee;

use ChargeBee\ChargeBee\Result;
use Omnipay\Common\Message\ResponseInterface;

class Charge implements ResponseInterface
{
    public function __construct(Result $parameters)
    {
        dd($parameters);
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function getRequest()
    {
        // TODO: Implement getRequest() method.
    }

    public function isSuccessful()
    {
        // TODO: Implement isSuccessful() method.
    }

    public function isRedirect()
    {
        // TODO: Implement isRedirect() method.
    }

    public function isCancelled()
    {
        // TODO: Implement isCancelled() method.
    }

    public function getMessage()
    {
        // TODO: Implement getMessage() method.
    }

    public function getCode()
    {
        // TODO: Implement getCode() method.
    }

    public function getTransactionReference()
    {
        // TODO: Implement getTransactionReference() method.
    }
}
