<?php

namespace Omnipay\FirstAtlanticCommerce\Message;

use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\FirstAtlanticCommerce\Message\AbstractResponse;

/**
 * FACPG2 XML Authorize Response
 */
class Authorize3DSResponse extends AbstractResponse
{
    /**
     * Constructor
     *
     * @param RequestInterface $request
     * @param string $data
     */
    public function __construct(RequestInterface $request, $data)
    {
        if ( empty($data) )
        {
            throw new InvalidResponseException();
        }

        $this->request = $request;
        $this->data    = $this->xmlDeserialize($data);
    }

    /**
     * Return whether or not the response was successful
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return isset($this->data['ResponseCode']) && '0' === $this->data['ResponseCode'];
    }

    public function isRedirect()
    {
        return true;
    }

    /**
     * Return the response's reason message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->data['ReasonCodeDescription'] ?? null;
    }
}
