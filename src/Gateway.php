<?php

namespace Omnipay\FirstAtlanticCommerce;

use Omnipay\Common\AbstractGateway;

/**
 * First Atlantic Commerce Payment Gateway 2 (XML POST Service)
 * @method \Omnipay\Common\Message\NotificationInterface acceptNotification(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface completePurchase(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface fetchTransaction(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
 */
class Gateway extends AbstractGateway
{
    use ParameterTrait;

    /**
     * @return string Gateway name.
     */
    public function getName()
    {
        return 'First Atlantic Commerce Payment Gateway 2';
    }

    /**
     * @return array Default parameters.
     */
    public function getDefaultParameters()
    {
        return [
            'merchantId'       => null,
            'merchantPassword' => null,
            'merchantUrl'      => null,
            'acquirerId'       => '464748',
            'testMode'         => false,
            'requireAvsCheck'  => true
        ];
    }

    /**
     * Authorize an amount on the customer’s card.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\AuthorizeRequest
     */
    public function authorize(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\AuthorizeRequest', $parameters);
    }

    /**
     * Capture an amount you have previously authorized.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\CaptureRequest
     */
    public function capture(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\CaptureRequest', $parameters);
    }

    /**
     *  Authorize and immediately capture an amount on the customer’s card.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\PurchaseRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\PurchaseRequest', $parameters);
    }

    /**
     * Authorize and immediately capture an amount on the customer’s card.
     *
     * @param array $parmeters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\Purchase3DSRequest
     */
    public function purchase3DS(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\Purchase3DSRequest', $parameters);
    }

    /**
     * Authorize and immediately capture an amount on the customer’s card.
     *
     * @param array $parmeters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\Authorize3DSRequest
     */
    public function authorize3DS(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\Authorize3DSRequest', $parameters);
    }

    /**
     * Authenticate and immediately capture an amount on the customer’s card.
     *
     * @param array $parmeters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\Authenticate3DSRequest
     */
    public function authenticate3DS(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\Authenticate3DSRequest', $parameters);
    }

    /**
     *  Refund an already processed transaction.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\RefundRequest
     */
    public function refund(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\RefundRequest', $parameters);
    }

    /**
     *  Reverse an already submitted transaction that hasn't been settled.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\VoidRequest
     */
    public function void(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\VoidRequest', $parameters);
    }

    /**
     *  Retrieve the status of any previous transaction.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\StatusRequest
     */
    public function status(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\StatusRequest', $parameters);
    }

    /**
     *  Create a stored card and return the reference token for future transactions.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\CreateCardRequest
     */
    public function createCard(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\CreateCardRequest', $parameters);
    }

    /**
     *  Update a stored card.
     *
     * @param array $parameters
     *
     * @return \Omnipay\FirstAtlanticCommerce\Message\UpdateCardRequest
     */
    public function updateCard(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\FirstAtlanticCommerce\Message\UpdateCardRequest', $parameters);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method \Omnipay\Common\Message\NotificationInterface acceptNotification(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completePurchase(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface fetchTransaction(array $options = [])
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
    }
}
