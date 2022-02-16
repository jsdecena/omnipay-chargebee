<?php

namespace Omnipay\Chargebee;

use ChargeBee\ChargeBee\Result;
use Omnipay\Common\Message\ResponseInterface;

class Charge implements ResponseInterface
{
    private Result $result;

    /**
     * @param Result $result
     */
    public function __construct(Result $result)
    {
        $this->result = $result;
    }

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return mixed|null
     */
    public function getSubscription()
    {
        return $this->getData();
    }

    /**
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->result->customer();
    }

    /**
     * @return mixed|null
     */
    public function getCard()
    {
        return $this->result->card();
    }

    /**
     * @return mixed|null
     */
    public function getInvoice()
    {
        return $this->result->invoice();
    }

    /**
     * @return array|mixed|null
     */
    public function getInvoices()
    {
        return $this->result->invoices();
    }

    public function getUnbilledCharge()
    {
        return $this->result->unbilledCharge();
    }

    public function getUnbilledCharges()
    {
        return $this->result->unbilledCharges();
    }

    /**
     * @return Result
     */
    public function getData()
    {
        return $this->result;
    }

    public function getRequest()
    {
        // TODO: Implement getRequest() method.
    }

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return empty($this->result->subscription()) === true;
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
        return 200;
    }

    /**
     * @return mixed|string|null
     */
    public function getTransactionReference()
    {
        return $this->result->transaction();
    }
}
